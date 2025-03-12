        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Notice extends Model
        {
            protected $table = '_Notice';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'ContentID', 'Subject', 'Article', 'EditDate'
            ];

            protected $casts = [
                'ID' => 'integer',
        'ContentID' => 'integer',
        'EditDate' => 'datetime',
    ];
        }