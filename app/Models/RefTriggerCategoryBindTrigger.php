<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerCategoryBindTrigger newModelQuery()
 * @method static Builder<static>|RefTriggerCategoryBindTrigger newQuery()
 * @method static Builder<static>|RefTriggerCategoryBindTrigger query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
