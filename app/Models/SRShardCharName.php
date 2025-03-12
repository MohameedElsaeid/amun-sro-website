        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SRShardCharName extends Model
        {
            protected $table = 'SR_ShardCharNames';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'ShardID', 'CharName'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'ShardID' => 'integer',
    ];
        }