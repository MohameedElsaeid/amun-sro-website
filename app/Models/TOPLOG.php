        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TOPLOG extends Model
        {
            protected $table = 'TOPLOG';
            public $timestamps = false;

            protected $fillable = [
                'No.', 'CharID', 'Charname', 'Date'
            ];

            protected $casts = [
                'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
    ];
        }