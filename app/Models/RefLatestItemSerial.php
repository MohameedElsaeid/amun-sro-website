<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefLatestItemSerial newModelQuery()
 * @method static Builder<static>|RefLatestItemSerial newQuery()
 * @method static Builder<static>|RefLatestItemSerial query()
 * @mixin Eloquent
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
