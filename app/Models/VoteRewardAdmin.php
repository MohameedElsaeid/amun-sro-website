        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class VoteRewardAdmin extends Model
        {
            protected $table = 'vote_reward_admins';
            public $timestamps = false;

            protected $fillable = [
                'name'
            ];

            protected $casts = [
            ];
        }