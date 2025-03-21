<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTrigger newModelQuery()
 * @method static Builder<static>|RefTrigger newQuery()
 * @method static Builder<static>|RefTrigger query()
 * @mixin Eloquent
 */
class RefTrigger extends Model
{
    public $timestamps = false;
    protected $table = '_RefTrigger';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'IsActive', 'IsRepeat', 'Comment512', 'IndexNumber'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'IsActive' => 'integer',
        'IsRepeat' => 'integer',
        'IndexNumber' => 'integer',
    ];
    protected $connection = 'proxy';
}
