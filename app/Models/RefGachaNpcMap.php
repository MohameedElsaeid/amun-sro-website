<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGachaNpcMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGachaNpcMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGachaNpcMap query()
 * @mixin \Eloquent
 */
class RefGachaNpcMap extends Model
{
    public $timestamps = false;
    protected $table = '_RefGachaNpcMap';
    protected $fillable = [
        'Service', 'NPC_ID', 'SelectionGachaID', 'WasteGachaID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'NPC_ID' => 'integer',
        'SelectionGachaID' => 'integer',
        'WasteGachaID' => 'integer',
    ];
}
