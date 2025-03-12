<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
