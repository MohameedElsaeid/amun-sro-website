<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JID newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JID newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JID query()
 * @mixin \Eloquent
 */
class JID extends Model
{
    public $timestamps = false;
    protected $table = 'JID';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
