<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortress query()
 * @mixin \Eloquent
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
