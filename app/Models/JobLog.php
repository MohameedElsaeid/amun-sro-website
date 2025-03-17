<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobLog query()
 * @mixin \Eloquent
 */
class JobLog extends Model
{
    public $timestamps = false;
    protected $table = 'JobLog';
    protected $fillable = [
        'UserJID', 'Amount', 'Limited', 'Date', 'TotalAmount', 'index'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'Amount' => 'integer',
        'Limited' => 'integer',
        'Date' => 'datetime',
        'TotalAmount' => 'integer',
        'index' => 'integer',
    ];
    protected $connection = 'log';
}
