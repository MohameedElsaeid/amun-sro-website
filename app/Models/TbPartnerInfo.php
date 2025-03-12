        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TbPartnerInfo extends Model
        {
            protected $table = 'tb_partnerInfo';
            public $timestamps = false;

            protected $fillable = [
                'partnerID', 'partnerName', 'partnerPass', 'balance', 'udate'
            ];

            protected $casts = [
                'balance' => 'integer',
        'udate' => 'datetime',
    ];
        }