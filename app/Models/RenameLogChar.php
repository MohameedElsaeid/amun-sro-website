<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RenameLogChar newModelQuery()
 * @method static Builder<static>|RenameLogChar newQuery()
 * @method static Builder<static>|RenameLogChar query()
 * @mixin Eloquent
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
