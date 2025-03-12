<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsHeuksal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsHeuksal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsHeuksal query()
 * @mixin \Eloquent
 */
class SkillsHeuksal extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsHeuksal';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
