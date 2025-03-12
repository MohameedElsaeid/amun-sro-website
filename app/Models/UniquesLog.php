<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniquesLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniquesLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniquesLog query()
 * @mixin \Eloquent
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
}
