<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharNickNameList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharNickNameList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharNickNameList query()
 * @mixin \Eloquent
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
}
