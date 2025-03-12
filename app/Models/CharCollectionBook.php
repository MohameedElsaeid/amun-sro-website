<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
