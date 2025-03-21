<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Pet newModelQuery()
 * @method static Builder<static>|Pet newQuery()
 * @method static Builder<static>|Pet query()
 * @mixin Eloquent
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
