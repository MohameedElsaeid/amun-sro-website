        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class VoteRewardLog extends Model
        {
            protected $table = 'vote_reward_log';
            public $timestamps = false;

            protected $fillable = [
                'username', 'ip', 'date'
            ];

            protected $casts = [
            ];
        }