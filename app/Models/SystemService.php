<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SystemService newModelQuery()
 * @method static Builder<static>|SystemService newQuery()
 * @method static Builder<static>|SystemService query()
 * @mixin Eloquent
 */
class SystemService extends Model
{
    public $timestamps = false;
    protected $table = 'SystemService';
    protected $fillable = [
        'ID', 'Service', 'Run', 'Type', 'SystemName'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Service' => 'integer',
    ];
    protected $connection = 'event';
}
