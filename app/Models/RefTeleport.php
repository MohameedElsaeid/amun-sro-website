        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTeleport extends Model
        {
            protected $table = '_RefTeleport';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'CodeName128', 'AssocRefObjCodeName128', 'AssocRefObjID', 'ZoneName128', 'GenRegionID', 'GenPos_X', 'GenPos_Y', 'GenPos_Z', 'GenAreaRadius', 'CanBeResurrectPos', 'CanGotoResurrectPos', 'GenWorldID', 'BindInteractionMask', 'FixedService'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'AssocRefObjID' => 'integer',
        'GenRegionID' => 'integer',
        'GenPos_X' => 'integer',
        'GenPos_Y' => 'integer',
        'GenPos_Z' => 'integer',
        'GenAreaRadius' => 'integer',
        'CanBeResurrectPos' => 'integer',
        'CanGotoResurrectPos' => 'integer',
        'GenWorldID' => 'integer',
        'BindInteractionMask' => 'integer',
        'FixedService' => 'integer',
    ];
        }