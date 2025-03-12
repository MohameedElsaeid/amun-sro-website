        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ExecQuery extends Model
        {
            protected $table = 'ExecQuery';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Day', 'Time', 'DatabaseIndex', 'Query'
            ];

            protected $casts = [
                'ID' => 'integer',
        'DatabaseIndex' => 'integer',
    ];
        }