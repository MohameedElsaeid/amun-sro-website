        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SRCharAppoint extends Model
        {
            protected $table = 'SR_CharAppoint';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'ShardID', 'CharID'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'ShardID' => 'integer',
    ];
        }