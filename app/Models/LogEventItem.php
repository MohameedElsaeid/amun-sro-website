<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogEventItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogEventItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogEventItem query()
 * @mixin \Eloquent
 */
class LogEventItem extends Model
{
    public $timestamps = false;
    protected $table = '_LogEventItem';
    protected $fillable = [
        'EventTime', 'CharID', 'ItemRefID', 'dwData', 'TargetStorage', 'Operation', 'Slot_From', 'Slot_To', 'EventPos', 'strDesc', 'Serial64', 'Gold'
    ];

    protected $casts = [
        'EventTime' => 'datetime',
        'CharID' => 'integer',
        'ItemRefID' => 'integer',
        'dwData' => 'integer',
        'TargetStorage' => 'integer',
        'Operation' => 'integer',
        'Slot_From' => 'integer',
        'Slot_To' => 'integer',
        'Serial64' => 'integer',
        'Gold' => 'integer',
    ];
    protected $connection = 'log';
}
