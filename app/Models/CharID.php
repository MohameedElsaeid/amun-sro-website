<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharID newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharID newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharID query()
 * @mixin \Eloquent
 */
class CharID extends Model
{
    public $timestamps = false;
    protected $table = 'CharID';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'log';
}
