        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsNewscomment extends Model
        {
            protected $table = 'srcms_newscomments';
            public $timestamps = false;

            protected $fillable = [
                'newsID', 'author', 'text', 'time'
            ];

            protected $casts = [
                'newsID' => 'integer',
        'time' => 'datetime',
    ];
        }