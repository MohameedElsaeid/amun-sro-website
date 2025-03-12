<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultQuest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultQuest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultQuest query()
 * @mixin \Eloquent
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
}
