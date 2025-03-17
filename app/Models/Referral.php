<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = [
        'referrer_id',
        'referee_id'
    ];

    public function referralLogs()
    {
        return $this->hasMany(Referral::class, 'referrer_id');
    }
}
