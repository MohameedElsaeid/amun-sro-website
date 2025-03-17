<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAchievement extends Model
{
    protected $fillable = [
        'JID',
        'achievement_code',
        'name',
        'description',
        'points_awarded',
    ];

    /**
     * Get the user that owns the achievement
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'JID', 'JID');
    }
}
