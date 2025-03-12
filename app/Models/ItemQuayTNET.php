<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemQuayTNET newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemQuayTNET newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemQuayTNET query()
 * @mixin \Eloquent
 */
class ItemQuayTNET extends Model
{
    public $timestamps = false;
    protected $table = 'Item_Quay_TNET';
    protected $fillable = [
        'CodeName'
    ];

    protected $casts = [
    ];
}
