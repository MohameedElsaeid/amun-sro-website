        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class OnlineOffline extends Model
        {
            protected $table = '_OnlineOffline';
            public $timestamps = false;

            protected $fillable = [
                'No.', 'CharID', 'Charname', 'Status', 'Date', 'Minutes', 'tMinutes', 'eSilk', 'mOnline', 'Silk/Hour', 'stillOnline@'
            ];

            protected $casts = [
                'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
        'Minutes' => 'integer',
        'tMinutes' => 'integer',
        'eSilk' => 'integer',
        'Silk/Hour' => 'integer',
        'stillOnline@' => 'datetime',
    ];
        }