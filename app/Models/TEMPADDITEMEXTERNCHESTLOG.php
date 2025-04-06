<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TEMPADDITEMEXTERNCHESTLOG newModelQuery()
 * @method static Builder<static>|TEMPADDITEMEXTERNCHESTLOG newQuery()
 * @method static Builder<static>|TEMPADDITEMEXTERNCHESTLOG query()
 * @mixin Eloquent
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
