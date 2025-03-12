<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemsDrop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemsDrop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemsDrop query()
 * @mixin \Eloquent
 */
class ItemsDrop extends Model
{
    public $timestamps = false;
    protected $table = '_ItemsDrop';
    protected $fillable = [
        'CharID', 'Serial64'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Serial64' => 'integer',
    ];
}
