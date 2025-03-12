        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Samorray100RW extends Model
        {
            protected $table = '_Samorray_100_RW';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'CurLevel', 'Charname', 'charjid', 'hwid'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'CurLevel' => 'integer',
        'charjid' => 'integer',
    ];
        }