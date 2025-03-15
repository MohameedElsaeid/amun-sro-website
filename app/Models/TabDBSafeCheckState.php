<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabDBSafeCheckState newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabDBSafeCheckState newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabDBSafeCheckState query()
 * @mixin \Eloquent
 */
class TabDBSafeCheckState extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_DBSafe_CheckState';
    protected $fillable = [
        'btCheckIn'
    ];

    protected $casts = [
        'btCheckIn' => 'integer',
    ];
    protected $connection = 'proxy';
}
