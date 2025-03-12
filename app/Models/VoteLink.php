        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class VoteLink extends Model
        {
            protected $table = 'vote_links';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Link', 'Img', 'Time', 'Reward'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Time' => 'integer',
        'Reward' => 'integer',
    ];
        }