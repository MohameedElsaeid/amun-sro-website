        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class IncomingPrivateChat extends Model
        {
            protected $table = '_IncomingPrivateChat';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CharName', 'Chat', 'Date'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }