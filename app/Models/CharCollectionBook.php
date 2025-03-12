<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharCollectionBook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharCollectionBook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharCollectionBook query()
 * @mixin \Eloquent
 */
class CharCollectionBook extends Model
{
    public $timestamps = false;
    protected $table = '_CharCollectionBook';
    protected $fillable = [
        'CharID', 'ThemeID', 'SlotIndex', 'RegDate'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'ThemeID' => 'integer',
        'SlotIndex' => 'integer',
        'RegDate' => 'datetime',
    ];
}
