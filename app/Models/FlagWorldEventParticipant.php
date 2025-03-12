        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class FlagWorldEventParticipant extends Model
        {
            protected $table = '_FlagWorld_EventParticipants';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'LatestAttempt', 'Count'
            ];

            protected $casts = [
                'JID' => 'integer',
        'LatestAttempt' => 'datetime',
        'Count' => 'integer',
    ];
        }