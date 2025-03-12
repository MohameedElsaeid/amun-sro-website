        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class BOOK extends Model
        {
            protected $table = 'BOOKS';
            public $timestamps = false;

            protected $fillable = [
                'title', 'pubdate', 'synopsis', 'inprint', 'salesCount'
            ];

            protected $casts = [
                'pubdate' => 'datetime',
        'inprint' => 'boolean',
        'salesCount' => 'integer',
    ];
        }