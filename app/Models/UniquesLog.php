<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|UniquesLog newModelQuery()
 * @method static Builder<static>|UniquesLog newQuery()
 * @method static Builder<static>|UniquesLog query()
 * @mixin Eloquent
 */
class UniquesLog extends Model
{
    public $timestamps = false;
    protected $table = '_UniquesLog';
    protected $fillable = [
        'ID', 'Type', 'CodeName128', 'Killer', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Type' => 'integer',
    ];
    protected $connection = 'event';
}
