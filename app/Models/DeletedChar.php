<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|DeletedChar newModelQuery()
 * @method static Builder<static>|DeletedChar newQuery()
 * @method static Builder<static>|DeletedChar query()
 * @mixin Eloquent
 */
class DeletedChar extends Model
{
    public $timestamps = false;
    protected $table = '_DeletedChar';
    protected $fillable = [
        'CharID', 'UserJID', 'DeletedDate'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'UserJID' => 'integer',
        'DeletedDate' => 'datetime',
    ];
    protected $connection = 'proxy';
}
