        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class VoteRewardConfig extends Model
        {
            protected $table = 'vote_reward_config';
            public $timestamps = false;

            protected $fillable = [
                'web_title', 'vote_time', 'url_top1', 'url_top2', 'reward', 'language', 'uniqueid'
            ];

            protected $casts = [
            ];
        }