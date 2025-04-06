<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ClientConfig newModelQuery()
 * @method static Builder<static>|ClientConfig newQuery()
 * @method static Builder<static>|ClientConfig query()
 * @mixin Eloquent
 */
class ClientConfig extends Model
{
    public $timestamps = false;
    protected $table = '_ClientConfig';
    protected $fillable = [
        'CharID', 'ConfigType', 'SlotSeq', 'SlotType', 'Data'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'ConfigType' => 'integer',
        'SlotSeq' => 'integer',
        'SlotType' => 'integer',
        'Data' => 'integer',
    ];
    protected $connection = 'proxy';
}
