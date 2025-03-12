<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    public $timestamps = false;
    protected $table = '_Guild';
    protected $fillable = [
        'ID', 'Name', 'Lvl', 'GatheredSP', 'FoundationDate', 'Alliance', 'MasterCommentTitle', 'MasterComment', 'Booty', 'Gold', 'LastCrestRev', 'CurCrestRev', 'MercenaryAttr', 'ItemPoints'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Lvl' => 'integer',
        'GatheredSP' => 'integer',
        'FoundationDate' => 'datetime',
        'Alliance' => 'integer',
        'Booty' => 'integer',
        'Gold' => 'integer',
        'LastCrestRev' => 'integer',
        'CurCrestRev' => 'integer',
        'MercenaryAttr' => 'integer',
        'ItemPoints' => 'integer',
    ];
}
