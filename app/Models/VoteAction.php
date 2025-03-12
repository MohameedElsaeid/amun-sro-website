        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class VoteAction extends Model
        {
            protected $table = 'vote_actions';
            public $timestamps = false;

            protected $fillable = [
                'Username', 'Status', 'VoteID', 'Date'
            ];

            protected $casts = [
                'Status' => 'integer',
        'VoteID' => 'integer',
        'Date' => 'integer',
    ];
        }