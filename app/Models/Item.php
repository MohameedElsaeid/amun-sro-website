<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Item newModelQuery()
 * @method static Builder<static>|Item newQuery()
 * @method static Builder<static>|Item query()
 * @mixin Eloquent
 */
class Item extends Model
{
    public $timestamps = false;
    protected $table = 'Items';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';


    public function getBindingOptionWithItem()
    {
        return $this->belongsTo(BindingOptionWithItem::class, 'ID64', 'nItemDBID')
            ->where('nOptValue', '>', 0);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getRefObjCommon()
    {
        return $this->hasOne(RefObjCommon::class, 'ID', 'RefItemID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getRefObjCommonCanTrade()
    {
        return $this->hasOne(RefObjCommon::class, 'ID', 'RefItemID')
            ->select('ID', 'CanTrade');
    }
}
