<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|JobRowsKill newModelQuery()
 * @method static Builder<static>|JobRowsKill newQuery()
 * @method static Builder<static>|JobRowsKill query()
 * @mixin Eloquent
 */
class JobRowsKill extends Model
{
    public $timestamps = false;
    protected $table = '_JobRowsKills';
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
