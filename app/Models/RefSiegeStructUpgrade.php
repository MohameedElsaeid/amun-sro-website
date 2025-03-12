        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeStructUpgrade extends Model
        {
            protected $table = '_RefSiegeStructUpgrade';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Structname', 'BaseStructcodename', 'UpgradeStructname1', 'UpgradeStructname2', 'UpgradeStructname3', 'UpgradeStructname4'
            ];

            protected $casts = [
                'Service' => 'integer',
    ];
        }