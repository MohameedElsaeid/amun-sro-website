        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SiegeFortressStoneState extends Model
        {
            protected $table = '_SiegeFortressStoneState';
            public $timestamps = false;

            protected $fillable = [
                'FortressID', 'GuildID', 'AccumulateDamage'
            ];

            protected $casts = [
                'FortressID' => 'integer',
        'GuildID' => 'integer',
        'AccumulateDamage' => 'integer',
    ];
        }