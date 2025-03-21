<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|HonorRowKill newModelQuery()
 * @method static Builder<static>|HonorRowKill newQuery()
 * @method static Builder<static>|HonorRowKill query()
 * @mixin Eloquent
 */
class HonorRowKill extends Model
{
    public $timestamps = false;
    protected $table = '_HonorRowKills';
    protected $fillable = [
        'ID', 'Kesen', 'Kesilen', 'DescType'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Kesen' => 'integer',
        'Kesilen' => 'integer',
        'DescType' => 'integer',
    ];
    protected $connection = 'log';
}
