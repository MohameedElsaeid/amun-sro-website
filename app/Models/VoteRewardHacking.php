        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class VoteRewardHacking extends Model
        {
            protected $table = 'vote_reward_hacking';
            public $timestamps = false;

            protected $fillable = [
                'ip', 'data'
            ];

            protected $casts = [
            ];
        }