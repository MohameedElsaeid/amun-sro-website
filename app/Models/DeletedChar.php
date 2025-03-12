        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class DeletedChar extends Model
        {
            protected $table = '_DeletedChar';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'UserJID', 'DeletedDate'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'UserJID' => 'integer',
        'DeletedDate' => 'datetime',
    ];
        }