<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKSilkBuyList extends Model
{
    public $timestamps = false;
    protected $table = 'SK_SilkBuyList';
    protected $fillable = [
        'BuyNo', 'UserJID', 'Silk_Type', 'Silk_Reason', 'Silk_Offset', 'Silk_Remain', 'ID', 'BuyQuantity', 'OrderNumber', 'PGCompany', 'PayMethod', 'PGUniqueNo', 'AuthNumber', 'AuthDate', 'SubJID', 'srID', 'SlipPaper', 'MngID', 'IP', 'RegDate'
    ];

    protected $casts = [
        'BuyNo' => 'integer',
        'UserJID' => 'integer',
        'Silk_Type' => 'integer',
        'Silk_Reason' => 'integer',
        'Silk_Offset' => 'integer',
        'Silk_Remain' => 'integer',
        'ID' => 'integer',
        'BuyQuantity' => 'integer',
        'PGCompany' => 'integer',
        'PayMethod' => 'integer',
        'AuthDate' => 'datetime',
        'SubJID' => 'integer',
        'MngID' => 'integer',
        'RegDate' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
    /**
     * Type 3 is for Web
     */
    public const SILKTYPEWEB = 3;

    /**
     * Type 2 is for Web
     */
    public const SILKTYPEVOUCHER = 2;

    /**
     * Reason 3 is for Web
     */
    public const SILKREASONWEB = 3;
}
