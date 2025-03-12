<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKPKUpdateLog extends Model
{
    public $timestamps = false;
    protected $table = 'SK_PK_UpdateLog';
    protected $fillable = [
        'ID', 'JID', 'UserName', 'CharID', 'CharName', 'PackageItemID', 'Silk_Own', 'Silk_Before', 'Silk_After', 'Gold_Remain', 'Gold_Before', 'Gold_After', 'IP', 'RegDate', 'Serial64', 'ShardID', 'ServiceCode', '_Strength', '_Intellect', '_CurLevel', '_Statpoint', '_NewName', '_OldPetName', '_NewPetName', '_NewStatPoint', '_NewLevel', '_NewStrength', '_NewIntellect', '_Skill_Own', '_Skill_Before', '_Skill_After', '_Item_BH'
    ];

    protected $casts = [
        'ID' => 'integer',
        'JID' => 'integer',
        'CharID' => 'integer',
        'PackageItemID' => 'integer',
        'Silk_Own' => 'integer',
        'Silk_Before' => 'integer',
        'Silk_After' => 'integer',
        'Gold_Remain' => 'integer',
        'Gold_Before' => 'integer',
        'Gold_After' => 'integer',
        'IP' => 'integer',
        'RegDate' => 'datetime',
        'Serial64' => 'integer',
        'ShardID' => 'integer',
        '_Strength' => 'integer',
        '_Intellect' => 'integer',
        '_CurLevel' => 'integer',
        '_Statpoint' => 'integer',
        '_NewStatPoint' => 'integer',
        '_NewLevel' => 'integer',
        '_NewStrength' => 'integer',
        '_NewIntellect' => 'integer',
        '_Skill_Own' => 'integer',
        '_Skill_Before' => 'integer',
        '_Skill_After' => 'integer',
    ];
}
