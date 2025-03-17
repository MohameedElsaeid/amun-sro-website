<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharCO newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharCO newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharCO query()
 * @mixin \Eloquent
 */
class CharCO extends Model
{
    public $timestamps = false;
    protected $table = '_CharCOS';
    protected $fillable = [
        'ID', 'OwnerCharID', 'RefCharID', 'HP', 'MP', 'KeeperNPC', 'State', 'CharName', 'Lvl', 'ExpOffset', 'HGP', 'PetOption', 'RentEndTime'
    ];

    protected $casts = [
        'ID' => 'integer',
        'OwnerCharID' => 'integer',
        'RefCharID' => 'integer',
        'HP' => 'integer',
        'MP' => 'integer',
        'KeeperNPC' => 'integer',
        'State' => 'integer',
        'Lvl' => 'integer',
        'ExpOffset' => 'integer',
        'HGP' => 'integer',
        'PetOption' => 'integer',
        'RentEndTime' => 'datetime',
    ];
    protected $connection = 'proxy';
}
