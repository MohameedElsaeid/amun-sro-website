<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LatestItemSerial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LatestItemSerial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LatestItemSerial query()
 * @mixin \Eloquent
 */
class LatestItemSerial extends Model
{
    public $timestamps = false;
    protected $table = '_LatestItemSerial';
    protected $fillable = [
        'LatestItemSerial'
    ];

    protected $casts = [
        'LatestItemSerial' => 'integer',
    ];
    protected $connection = 'proxy';
}
