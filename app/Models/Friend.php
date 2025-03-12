        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Friend extends Model
        {
            protected $table = '_Friend';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'FriendCharID', 'FriendCharName', 'RefObjID'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'FriendCharID' => 'integer',
        'RefObjID' => 'integer',
    ];
        }