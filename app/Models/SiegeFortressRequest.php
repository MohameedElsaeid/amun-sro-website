        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SiegeFortressRequest extends Model
        {
            protected $table = '_SiegeFortressRequest';
            public $timestamps = false;

            protected $fillable = [
                'FortressID', 'GuildID', 'RequestType'
            ];

            protected $casts = [
                'FortressID' => 'integer',
        'GuildID' => 'integer',
        'RequestType' => 'integer',
    ];
        }