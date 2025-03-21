<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharCollectionBook newModelQuery()
 * @method static Builder<static>|CharCollectionBook newQuery()
 * @method static Builder<static>|CharCollectionBook query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
