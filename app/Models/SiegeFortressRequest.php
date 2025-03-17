<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressRequest query()
 * @mixin \Eloquent
 */
class SiegeFortressRequest extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressRequest';
    protected $fillable = [
        'FortressID', 'GuildID', 'RequestType'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'GuildID' => 'integer',
        'RequestType' => 'integer',
    ];
    protected $connection = 'proxy';
}
