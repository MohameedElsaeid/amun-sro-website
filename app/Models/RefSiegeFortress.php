        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeFortress extends Model
        {
            protected $table = '_RefSiegeFortress';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'FortressID', 'CodeName128', 'Name', 'NameID128', 'LinkedTeleportCodeName', 'Scale', 'MaxAdmission', 'MaxGuard', 'MaxBarricade', 'TaxTargets', 'RequestFee', 'CrestPath128', 'RequestNPCName128'
            ];

            protected $casts = [
                'Service' => 'integer',
        'FortressID' => 'integer',
        'Scale' => 'integer',
        'MaxAdmission' => 'integer',
        'MaxGuard' => 'integer',
        'MaxBarricade' => 'integer',
        'TaxTargets' => 'integer',
        'RequestFee' => 'integer',
    ];
        }