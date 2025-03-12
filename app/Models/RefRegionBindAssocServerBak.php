        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefRegionBindAssocServerBak extends Model
        {
            protected $table = '_RefRegionBindAssocServer_bak';
            public $timestamps = false;

            protected $fillable = [
                'AreaName', 'AssocServer'
            ];

            protected $casts = [
                'AssocServer' => 'integer',
    ];
        }