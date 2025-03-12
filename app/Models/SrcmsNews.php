        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsNews extends Model
        {
            protected $table = 'srcms_news';
            public $timestamps = false;

            protected $fillable = [
                'title', 'content', 'author', 'time'
            ];

            protected $casts = [
            ];
        }