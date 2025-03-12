        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class GPHistory extends Model
        {
            protected $table = '_GPHistory';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'GuildID', 'UsedTime', 'CharName', 'UsedGP', 'Reason'
            ];

            protected $casts = [
                'ID' => 'integer',
        'GuildID' => 'integer',
        'UsedTime' => 'datetime',
        'UsedGP' => 'integer',
        'Reason' => 'integer',
    ];
        }