<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SiegeFortress newModelQuery()
 * @method static Builder<static>|SiegeFortress newQuery()
 * @method static Builder<static>|SiegeFortress query()
 * @mixin Eloquent
 */
class SiegeFortress extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortress';
    protected $fillable = [
        'FortressID', 'GuildID', 'TaxRatio', 'Tax', 'NPCHired', 'TempGuildID', 'Introduction', 'CreatedDungeonTime', 'CreatedDungeonCount', 'IntroductionModificationPermission'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'GuildID' => 'integer',
        'TaxRatio' => 'integer',
        'Tax' => 'integer',
        'NPCHired' => 'integer',
        'TempGuildID' => 'integer',
        'CreatedDungeonTime' => 'datetime',
        'CreatedDungeonCount' => 'integer',
        'IntroductionModificationPermission' => 'integer',
    ];
    protected $connection = 'proxy';

    public function getGuildName()
    {
        $query = $this->hasOne(Guild::class, 'ID', 'GuildID');
        $query->where('ID', '!=', 0);
        return $query;
    }
}
