<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Admin\Lottery;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ExtralEveningCheckWinner implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
     protected $twodWiner;

    public function __construct($twodWiner)
    {
        $this->twodWiner = $twodWiner;
    }

    public function handle()
    {
        $today = Carbon::today();
        $eveningSession = 'evening';

        // Ensure this is for the evening session
        if ($this->twodWiner->session !== $eveningSession) {
            return;
        }

        // Find all winning entries for the evening session
        $winningEntries = DB::table('lottery_two_digit_copy')
            ->join('lotteries', 'lottery_two_digit_copy.lottery_id', '=', 'lotteries.id')
            ->where('lottery_two_digit_copy.two_digit_id', $this->twodWiner->prize_no)
            ->where('lottery_two_digit_copy.prize_sent', false)
            ->whereDate('lottery_two_digit_copy.created_at', $today)
            ->select('lottery_two_digit_copy.*')
            ->get();

        foreach ($winningEntries as $entry) {
            DB::transaction(function () use ($entry) {
                $lottery = Lottery::findOrFail($entry->lottery_id);
                $user = $lottery->user;
                $user->balance += $entry->sub_amount * 85; // Assuming the prize multiplier is 85
                $user->save();

                // Update prize_sent to true for the winning entry
                $lottery->twoDigits()->updateExistingPivot($entry->two_digit_id, ['prize_sent' => true]);
            });
        }
    }

}