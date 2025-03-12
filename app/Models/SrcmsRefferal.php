        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsRefferal extends Model
        {
            protected $table = 'srcms_refferals';
            public $timestamps = false;

            protected $fillable = [
                'reffererJID', 'invitedUserJID', 'time', 'ip', 'bonusAdded'
            ];

            protected $casts = [
                'reffererJID' => 'integer',
        'invitedUserJID' => 'integer',
        'bonusAdded' => 'integer',
    ];
        }