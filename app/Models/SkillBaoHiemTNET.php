<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillBaoHiemTNET newModelQuery()
 * @method static Builder<static>|SkillBaoHiemTNET newQuery()
 * @method static Builder<static>|SkillBaoHiemTNET query()
 * @mixin Eloquent
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
