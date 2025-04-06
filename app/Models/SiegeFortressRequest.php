<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SiegeFortressRequest newModelQuery()
 * @method static Builder<static>|SiegeFortressRequest newQuery()
 * @method static Builder<static>|SiegeFortressRequest query()
 * @mixin Eloquent
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
