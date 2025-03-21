<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ChestInfo newModelQuery()
 * @method static Builder<static>|ChestInfo newQuery()
 * @method static Builder<static>|ChestInfo query()
 * @mixin Eloquent
 */
class ChestInfo extends Model
{
    public $timestamps = false;
    protected $table = '_ChestInfo';
    protected $fillable = [
        'JID', 'ChestSize'
    ];

    protected $casts = [
        'JID' => 'integer',
        'ChestSize' => 'integer',
    ];
    protected $connection = 'proxy';
}
