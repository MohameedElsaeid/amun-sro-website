<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ResultOfPackageItemToMappingWithServerSide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ResultOfPackageItemToMappingWithServerSide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ResultOfPackageItemToMappingWithServerSide query()
 * @mixin \Eloquent
 */
class ResultOfPackageItemToMappingWithServerSide extends Model
{
    public $timestamps = false;
    protected $table = '_ResultOfPackageItemToMappingWithServerSide';
    protected $fillable = [
        'Operation', 'CharID', 'Slot', 'RefItemSerial64', 'RefItemDBID', 'RefItemID', 'Type', 'SubType'
    ];

    protected $casts = [
        'Operation' => 'integer',
        'CharID' => 'integer',
        'Slot' => 'integer',
        'RefItemSerial64' => 'integer',
        'RefItemDBID' => 'integer',
        'RefItemID' => 'integer',
        'Type' => 'integer',
        'SubType' => 'integer',
    ];
}
