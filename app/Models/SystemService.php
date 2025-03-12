<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemService query()
 * @mixin \Eloquent
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
}
