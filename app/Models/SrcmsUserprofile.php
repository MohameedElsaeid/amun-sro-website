        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsUserprofile extends Model
        {
            protected $table = 'srcms_userprofiles';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'gender', 'skype', 'msn', 'avatar', 'whois', 'ispublic'
            ];

            protected $casts = [
                'JID' => 'integer',
        'gender' => 'integer',
        'ispublic' => 'integer',
    ];
        }