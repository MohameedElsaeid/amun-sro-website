<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefLatestItemSerial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefLatestItemSerial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefLatestItemSerial query()
 * @mixin \Eloquent
 */
class RefLatestItemSerial extends Model
{
    public $timestamps = false;
    protected $table = '_RefLatestItemSerial';
    protected $fillable = [
        'LatestItemSerial'
    ];

    protected $casts = [
        'LatestItemSerial' => 'integer',
    ];
    protected $connection = 'proxy';
}
