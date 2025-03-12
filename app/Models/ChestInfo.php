<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ChestInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ChestInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ChestInfo query()
 * @mixin \Eloquent
 */
class ChestInfo extends Model
{
    public $timestamps = false;
    protected $table = '_ChestInfo';
    protected $fillable = [
        'JID', 'ChestSize'
    ];

    protected $casts = [
        'JID' => 'integer',
        'ChestSize' => 'integer',
    ];
}
