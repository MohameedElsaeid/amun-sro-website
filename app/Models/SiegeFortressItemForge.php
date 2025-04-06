<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SiegeFortressItemForge newModelQuery()
 * @method static Builder<static>|SiegeFortressItemForge newQuery()
 * @method static Builder<static>|SiegeFortressItemForge query()
 * @mixin Eloquent
 */
class SiegeFortressItemForge extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressItemForge';
    protected $fillable = [
        'FortressID', 'ItemRefID', 'Amount', 'Finished', 'StartDate', 'FinishDate'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'ItemRefID' => 'integer',
        'Amount' => 'integer',
        'Finished' => 'integer',
        'StartDate' => 'datetime',
        'FinishDate' => 'datetime',
    ];
    protected $connection = 'proxy';
}
