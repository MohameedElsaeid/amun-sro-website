        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SiegeFortressStatus extends Model
        {
            protected $table = '__SiegeFortressStatus__';
            public $timestamps = false;

            protected $fillable = [
                'ShardID', 'FortressName', 'FortressScale', 'TaxRatio', 'OwnerGuildName', 'OwnerGuildMaster', 'OwnerAllianceGuildName1', 'OwnerAllianceGuildName2', 'OwnerAllianceGuildName3', 'OwnerAllianceGuildName4', 'OwnerAllianceGuildName5', 'OwnerAllianceGuildName6', 'OwnerAllianceGuildName7', 'OwnerAllianceGuildName8', 'OwnerUpdateDate'
            ];

            protected $casts = [
                'ShardID' => 'integer',
        'FortressScale' => 'integer',
        'TaxRatio' => 'integer',
        'OwnerUpdateDate' => 'datetime',
    ];
        }