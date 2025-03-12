        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SRCharName extends Model
        {
            protected $table = 'SR_CharNames';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'ShardID', 'CharID_1', 'CharID_2', 'CharID_3'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'ShardID' => 'integer',
    ];
        }