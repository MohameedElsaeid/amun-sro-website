        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ShardCurrentUser extends Model
        {
            protected $table = '_ShardCurrentUser';
            public $timestamps = false;

            protected $fillable = [
                'nID', 'nShardID', 'nUserCount', 'dLogDate'
            ];

            protected $casts = [
                'nID' => 'integer',
        'nShardID' => 'integer',
        'nUserCount' => 'integer',
        'dLogDate' => 'datetime',
    ];
        }