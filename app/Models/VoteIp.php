        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class VoteIp extends Model
        {
            protected $table = 'vote_ip';
            public $timestamps = false;

            protected $fillable = [
                'IP', 'LastDate', 'VoteID'
            ];

            protected $casts = [
                'VoteID' => 'integer',
    ];
        }