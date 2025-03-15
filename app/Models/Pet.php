<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pet query()
 * @mixin \Eloquent
 */
class Pet extends Model
{
    public $timestamps = false;
    protected $table = 'Pets';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'log';
}
