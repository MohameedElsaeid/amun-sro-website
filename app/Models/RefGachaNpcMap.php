<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGachaNpcMap newModelQuery()
 * @method static Builder<static>|RefGachaNpcMap newQuery()
 * @method static Builder<static>|RefGachaNpcMap query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
