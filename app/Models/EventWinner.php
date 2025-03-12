        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class EventWinner extends Model
        {
            protected $table = 'EventWinners';
            public $timestamps = false;

            protected $fillable = [
                'CharId', 'EventName', 'Wins'
            ];

            protected $casts = [
                'Wins' => 'integer',
    ];
        }