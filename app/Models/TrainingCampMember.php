<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TrainingCampMember newModelQuery()
 * @method static Builder<static>|TrainingCampMember newQuery()
 * @method static Builder<static>|TrainingCampMember query()
 * @mixin Eloquent
 */
class TrainingCampMember extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampMember';
    protected $fillable = [
        'CampID', 'CharID', 'RefObjID', 'CharName', 'JoinDate', 'MemberClass', 'CharJoinedLevel', 'CharCurLevel', 'CharMaxLevel', 'HonorPoint'
    ];

    protected $casts = [
        'CampID' => 'integer',
        'CharID' => 'integer',
        'RefObjID' => 'integer',
        'JoinDate' => 'datetime',
        'MemberClass' => 'integer',
        'CharJoinedLevel' => 'integer',
        'CharCurLevel' => 'integer',
        'CharMaxLevel' => 'integer',
        'HonorPoint' => 'integer',
    ];
    protected $connection = 'proxy';
}
