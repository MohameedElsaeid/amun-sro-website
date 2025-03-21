<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharNickNameList newModelQuery()
 * @method static Builder<static>|CharNickNameList newQuery()
 * @method static Builder<static>|CharNickNameList query()
 * @mixin Eloquent
 */
class CharNickNameList extends Model
{
    public $timestamps = false;
    protected $table = '_CharNickNameList';
    protected $fillable = [
        'NickName16', 'CharID'
    ];

    protected $casts = [
        'CharID' => 'integer',
    ];
    protected $connection = 'proxy';
}
