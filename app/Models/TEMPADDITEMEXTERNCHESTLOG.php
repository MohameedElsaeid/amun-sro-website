<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TEMPADDITEMEXTERNCHESTLOG newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TEMPADDITEMEXTERNCHESTLOG newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TEMPADDITEMEXTERNCHESTLOG query()
 * @mixin \Eloquent
 */
class TEMPADDITEMEXTERNCHESTLOG extends Model
{
    public $timestamps = false;
    protected $table = '_TEMP_ADDITEMEXTERN_CHEST_LOG';
    protected $fillable = [
        'ID', 'LogString', 'LogDate'
    ];

    protected $casts = [
        'ID' => 'integer',
        'LogDate' => 'datetime',
    ];
    protected $connection = 'proxy';
}
