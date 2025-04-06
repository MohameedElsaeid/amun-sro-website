<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|LatestItemSerial newModelQuery()
 * @method static Builder<static>|LatestItemSerial newQuery()
 * @method static Builder<static>|LatestItemSerial query()
 * @mixin Eloquent
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
