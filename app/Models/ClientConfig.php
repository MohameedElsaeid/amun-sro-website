<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClientConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClientConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClientConfig query()
 * @mixin \Eloquent
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
}
