<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCategoryBindTrigger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCategoryBindTrigger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCategoryBindTrigger query()
 * @mixin \Eloquent
 */
class RefTriggerCategoryBindTrigger extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerCategoryBindTrigger';
    protected $fillable = [
        'Service', 'ID', 'TriggerCategoryID', 'TriggerID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerCategoryID' => 'integer',
        'TriggerID' => 'integer',
    ];
}
