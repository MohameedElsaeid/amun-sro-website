        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class UniqueKillList extends Model
        {
            protected $table = '_UniqueKillList';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CharID', 'CodeName128', 'time'
            ];

            protected $casts = [
                'ID' => 'integer',
        'CharID' => 'integer',
        'time' => 'datetime',
    ];
        }