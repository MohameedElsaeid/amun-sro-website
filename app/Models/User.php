        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class User extends Model
        {
            protected $table = '_User';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'CharID'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'CharID' => 'integer',
    ];
        }