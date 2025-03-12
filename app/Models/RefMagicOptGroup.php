        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefMagicOptGroup extends Model
        {
            protected $table = '_RefMagicOptGroup';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'LinkID', 'MagicType', 'CodeName128', 'MOptID', 'MOptLevel', 'Value', 'Param1', 'Param1_Desc', 'Param2', 'Param2_Desc'
            ];

            protected $casts = [
                'Service' => 'integer',
        'LinkID' => 'integer',
        'MagicType' => 'integer',
        'MOptID' => 'integer',
        'MOptLevel' => 'integer',
        'Value' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
    ];
        }