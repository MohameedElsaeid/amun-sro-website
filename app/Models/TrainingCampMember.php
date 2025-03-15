<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampMember query()
 * @mixin \Eloquent
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
