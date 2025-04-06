<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefObjStruct newModelQuery()
 * @method static Builder<static>|RefObjStruct newQuery()
 * @method static Builder<static>|RefObjStruct query()
 * @mixin Eloquent
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
