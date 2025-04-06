<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ResultOfPackageItemToMappingWithServerSide newModelQuery()
 * @method static Builder<static>|ResultOfPackageItemToMappingWithServerSide newQuery()
 * @method static Builder<static>|ResultOfPackageItemToMappingWithServerSide query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
