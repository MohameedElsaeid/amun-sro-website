<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjStruct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjStruct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjStruct query()
 * @mixin \Eloquent
 */
class RefObjStruct extends Model
{
    public $timestamps = false;
    protected $table = '_RefObjStruct';
    protected $fillable = [
        'ID', 'Dummy_Data'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Dummy_Data' => 'integer',
    ];
    protected $connection = 'proxy';
}
