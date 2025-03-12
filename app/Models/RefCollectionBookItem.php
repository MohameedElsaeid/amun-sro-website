<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCollectionBookItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCollectionBookItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCollectionBookItem query()
 * @mixin \Eloquent
 */
class RefCollectionBookItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefCollectionBook_Item';
    protected $fillable = [
        'Service', 'CodeName128', 'ObjName128', 'ThemeCodeName128', 'SlotIndex', 'Story128', 'DDJFile128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SlotIndex' => 'integer',
    ];
}
