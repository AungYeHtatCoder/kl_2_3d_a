<?php

namespace App\Models\ThreeDigit;

use App\Models\User;
use App\Models\Admin\ThreedDigit;
use App\Models\Admin\LotteryMatch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lotto extends Model
{
    use HasFactory;
        protected $fillable = [
        'total_amount',
        'user_id',
        'session',
        'lottery_match_id'
    ];
    protected $dates = ['created_at', 'updated_at'];

        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function lotteryMatch()
    {
        return $this->belongsTo(LotteryMatch::class, 'lottery_match_id');
    }

     public function threedDigits() {
        return $this->belongsToMany(ThreedDigit::class, 'lotto_threed_digit_pivot')->withPivot('sub_amount', 'prize_sent')->withTimestamps();
    }
}