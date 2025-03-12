        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefRegionBindAssocServer extends Model
        {
            protected $table = '_RefRegionBindAssocServer';
            public $timestamps = false;

            protected $fillable = [
                'AreaName', 'AssocServer'
            ];

            protected $casts = [
                'AssocServer' => 'integer',
    ];
        }