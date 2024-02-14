<?php

namespace App\Models\Admin;

use App\Models\ThreeDigit\Lotto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThreedDigit extends Model
{
    use HasFactory;
     protected $fillable = ['digit'];
     public function lottos() {
        return $this->belongsToMany(Lotto::class, 'lotto_threed_digit_pivot')->withPivot('sub_amount');
    }
}