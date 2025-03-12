        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharTrijobSafeTrade extends Model
        {
            protected $table = '_CharTrijobSafeTrade';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'AbleCount', 'Status', 'LastSafeTrade'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'AbleCount' => 'integer',
        'Status' => 'integer',
        'LastSafeTrade' => 'datetime',
    ];
        }