<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Guild newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Guild newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Guild query()
 * @mixin \Eloquent
 */
class Guild extends Model
{
    protected $connection = 'shard';

    public $timestamps = false;
    protected $table = '_Guild';
    protected $fillable = [
        'ID', 'Name', 'Lvl', 'GatheredSP', 'FoundationDate', 'Alliance', 'MasterCommentTitle', 'MasterComment', 'Booty', 'Gold', 'LastCrestRev', 'CurCrestRev', 'MercenaryAttr', 'ItemPoints'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Lvl' => 'integer',
        'GatheredSP' => 'integer',
        'FoundationDate' => 'datetime',
        'Alliance' => 'integer',
        'Booty' => 'integer',
        'Gold' => 'integer',
        'LastCrestRev' => 'integer',
        'CurCrestRev' => 'integer',
        'MercenaryAttr' => 'integer',
        'ItemPoints' => 'integer',
    ];

    public function getGuildMembers()
    {
        return $this->hasMany(GuildMember::class, 'GuildID', 'ID');
    }
}
