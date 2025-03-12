        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class OldTrijob extends Model
        {
            protected $table = '_OldTrijob';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'JobLvl_Trader', 'Trader_Exp', 'JobLvl_Robber', 'Robber_Exp', 'JobLvl_Hunter', 'Hunter_Exp'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'JobLvl_Trader' => 'integer',
        'Trader_Exp' => 'integer',
        'JobLvl_Robber' => 'integer',
        'Robber_Exp' => 'integer',
        'JobLvl_Hunter' => 'integer',
        'Hunter_Exp' => 'integer',
    ];
        }