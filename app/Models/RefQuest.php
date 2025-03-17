<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefQuest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefQuest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefQuest query()
 * @mixin \Eloquent
 */
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
    protected $connection = 'proxy';
}
