<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefCharDefaultQuest newModelQuery()
 * @method static Builder<static>|RefCharDefaultQuest newQuery()
 * @method static Builder<static>|RefCharDefaultQuest query()
 * @mixin Eloquent
 */
class RefCharDefaultQuest extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharDefault_Quest';
    protected $fillable = [
        'Service', 'ID', 'Race', 'CodeName', 'RequiredLevel'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'Race' => 'integer',
        'RequiredLevel' => 'integer',
    ];
    protected $connection = 'proxy';
}
