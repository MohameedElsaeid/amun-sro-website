<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillBaoHiemTNET newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillBaoHiemTNET newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillBaoHiemTNET query()
 * @mixin \Eloquent
 */
class SkillBaoHiemTNET extends Model
{
    public $timestamps = false;
    protected $table = '_Skill_BaoHiem_TNET';
    protected $fillable = [
        'CharID', 'CharName', 'SkillBaoHiem', 'Regdate', 'LastModified'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'SkillBaoHiem' => 'integer',
        'Regdate' => 'datetime',
        'LastModified' => 'datetime',
    ];
    protected $connection = 'proxy';
}
