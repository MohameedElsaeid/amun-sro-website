        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ModuleVersion extends Model
        {
            protected $table = '_ModuleVersion';
            public $timestamps = false;

            protected $fillable = [
                'nID', 'nDivisionID', 'nContentID', 'nModuleID', 'nVersion', 'szVersion', 'szDesc', 'nValid'
            ];

            protected $casts = [
                'nID' => 'integer',
        'nDivisionID' => 'integer',
        'nContentID' => 'integer',
        'nModuleID' => 'integer',
        'nVersion' => 'integer',
        'nValid' => 'integer',
    ];
        }