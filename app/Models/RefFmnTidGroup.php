<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefFmnTidGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefFmnTidGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefFmnTidGroup query()
 * @mixin \Eloquent
 */
class RefFmnTidGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefFmnTidGroup';
    protected $fillable = [
        'TidGroupID', 'TidGroupName'
    ];

    protected $casts = [
        'TidGroupID' => 'integer',
    ];
    protected $connection = 'proxy';
}
