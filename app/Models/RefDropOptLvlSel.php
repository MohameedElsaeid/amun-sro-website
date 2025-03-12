        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefDropOptLvlSel extends Model
        {
            protected $table = '_RefDropOptLvlSel';
            public $timestamps = false;

            protected $fillable = [
                'OptLevel', 'Prob', 'ReqOnlineTime'
            ];

            protected $casts = [
                'OptLevel' => 'integer',
        'Prob' => 'float',
        'ReqOnlineTime' => 'integer',
    ];
        }