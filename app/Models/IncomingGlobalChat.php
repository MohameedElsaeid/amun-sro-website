        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class IncomingGlobalChat extends Model
        {
            protected $table = '_IncomingGlobalChat';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CharName', 'GlobalChat', 'Date'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }