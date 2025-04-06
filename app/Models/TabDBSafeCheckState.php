<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabDBSafeCheckState newModelQuery()
 * @method static Builder<static>|TabDBSafeCheckState newQuery()
 * @method static Builder<static>|TabDBSafeCheckState query()
 * @mixin Eloquent
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
