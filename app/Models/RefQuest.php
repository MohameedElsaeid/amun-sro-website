<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefQuest extends Model
{
    public $timestamps = false;
    protected $table = '_RefQuest';
    protected $fillable = [
        'Service', 'ID', 'CodeName', 'Level', 'DescName', 'NameString', 'PayString', 'ContentsString', 'PayContents', 'NoticeNPC', 'NoticeCondition'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'Level' => 'integer',
    ];
}
