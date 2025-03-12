<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobRowsKill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobRowsKill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobRowsKill query()
 * @mixin \Eloquent
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
}
