<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HonorRowKill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HonorRowKill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HonorRowKill query()
 * @mixin \Eloquent
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
}
