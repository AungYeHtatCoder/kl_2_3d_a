<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Lotto;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\ThreeDigit\ThreeDigit;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CheckForThreeDWinners implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $threedWinner;

    public function __construct($threedWinner)
    {
        $this->threedWinner = $threedWinner;
    }

    public function handle(): void
    {
        Log::info('Dispatched for prize number: ' . $this->threedWinner->prize_no);

        // Convert prize_no to integer if necessary
        $prizeNo = ltrim($this->threedWinner->prize_no, '0');
        $prizeNo = $prizeNo === '' ? 0 : (int)$prizeNo; // If empty, it was '000'

        // Get the three_digit_id for the prize_no
        $threeDigit = ThreeDigit::where('three_digit', $this->threedWinner->prize_no)->first();
        if (!$threeDigit) {
            Log::error('ThreeDigit not found for prize number: ' . $this->threedWinner->prize_no);
            return;
        }

        // Find all winning entries
        $winningEntries = DB::table('lotto_three_digit_copy')
            ->join('lottos', 'lotto_three_digit_copy.lotto_id', '=', 'lottos.id')
            ->where('lotto_three_digit_copy.three_digit_id', $threeDigit->id)
            ->where('lotto_three_digit_copy.prize_sent', false)
            ->whereDate('lotto_three_digit_copy.created_at', Carbon::today())
            ->select('lotto_three_digit_copy.*')
            ->get();

        Log::info('Winning entries count: ' . $winningEntries->count());

        foreach ($winningEntries as $entry) {
            DB::transaction(function () use ($entry, $threeDigit) {
                // Retrieve the lottery for this entry
                $lottery = Lotto::findOrFail($entry->lotto_id);
                $methodToUpdatePivot = 'threedDigits';

                // Update user's balance
                $user = $lottery->user;
                $user->balance += $entry->sub_amount * 550;
                $user->save();

                // Update prize_sent in pivot
                $lottery->$methodToUpdatePivot()->updateExistingPivot($threeDigit->id, ['prize_sent' => true]);

                Log::info('Updated prize_sent for entry: ' . $entry->id);
            });
        }
    }
}