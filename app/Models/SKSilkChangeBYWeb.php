<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKSilkChangeBYWeb extends Model
{
    /**
     * Type 0 is regular Silk
     */
    public const SILKTYPESILK = 0;
    /**
     * Reason 1 is for Gift (Activity Points)
     */
    public const SILKREASONGIFT = 1;
    public $timestamps = false;
    protected $table = 'SK_SilkChange_BY_Web';
    protected $fillable = [
        'ID', 'JID', 'silk_remain', 'silk_offset', 'silk_type', 'reason'
    ];
    protected $casts = [
        'ID' => 'integer',
        'JID' => 'integer',
        'silk_remain' => 'integer',
        'silk_offset' => 'integer',
        'silk_type' => 'integer',
        'reason' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
