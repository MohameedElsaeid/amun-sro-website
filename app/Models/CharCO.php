        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharCO extends Model
        {
            protected $table = '_CharCOS';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'OwnerCharID', 'RefCharID', 'HP', 'MP', 'KeeperNPC', 'State', 'CharName', 'Lvl', 'ExpOffset', 'HGP', 'PetOption', 'RentEndTime'
            ];

            protected $casts = [
                'ID' => 'integer',
        'OwnerCharID' => 'integer',
        'RefCharID' => 'integer',
        'HP' => 'integer',
        'MP' => 'integer',
        'KeeperNPC' => 'integer',
        'State' => 'integer',
        'Lvl' => 'integer',
        'ExpOffset' => 'integer',
        'HGP' => 'integer',
        'PetOption' => 'integer',
        'RentEndTime' => 'datetime',
    ];
        }