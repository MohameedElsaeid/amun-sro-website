<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RenameLogChar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RenameLogChar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RenameLogChar query()
 * @mixin \Eloquent
 */
class RenameLogChar extends Model
{
    public $timestamps = false;
    protected $table = '_RenameLog_Char';
    protected $fillable = [
        'ID', 'CharID', 'OldName', 'NewName', 'Time'
    ];

    protected $casts = [
        'ID' => 'integer',
        'CharID' => 'integer',
        'Time' => 'datetime',
    ];
    protected $connection = 'proxy';
}
