<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefFmnTidGroupMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefFmnTidGroupMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefFmnTidGroupMap query()
 * @mixin \Eloquent
 */
class RefFmnTidGroupMap extends Model
{
    public $timestamps = false;
    protected $table = '_RefFmnTidGroupMap';
    protected $fillable = [
        'Service', 'TidGroupID', 'TypeID1', 'TypeID2', 'TypeID3', 'TypeID4'
    ];

    protected $casts = [
        'Service' => 'integer',
        'TidGroupID' => 'integer',
        'TypeID1' => 'integer',
        'TypeID2' => 'integer',
        'TypeID3' => 'integer',
        'TypeID4' => 'integer',
    ];
    protected $connection = 'proxy';
}
