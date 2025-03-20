<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @method static Builder<static>|OnlineOffline newModelQuery()
 * @method static Builder<static>|OnlineOffline newQuery()
 * @method static Builder<static>|OnlineOffline query()
 * @mixin Eloquent
 */
class OnlineOffline extends Model
{
    /**
     * If the Char is logged in
     */
    const STATUS_LOGGED_IN = 4;
    /**
     * If the Char is logged out
     */
    const STATUS_LOGGED_OUT = 6;
    public $timestamps = false;
    protected $table = '_OnlineOffline';
    protected $fillable = [
        'No.', 'CharID', 'Charname', 'Status', 'Date', 'Minutes', 'tMinutes', 'eSilk', 'mOnline', 'Silk/Hour', 'stillOnline@'
    ];
    protected $casts = [
        'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
        'Minutes' => 'integer',
        'tMinutes' => 'integer',
        'eSilk' => 'integer',
        'Silk/Hour' => 'integer',
        'stillOnline@' => 'datetime',
    ];
    protected $connection = 'log';

    /**
     * @return BelongsTo
     */
    public function getCharacter(): BelongsTo
    {
        return $this->belongsTo(Char::class, 'CharID', 'CharID')
            ->whereNotNull('CharName16')
            ->select(['CharID', 'CharName16', 'CurLevel', 'LatestRegion', 'PosX', 'PosY', 'PosZ']);
    }
}
