        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabRefSpawnToolVersion extends Model
        {
            protected $table = 'Tab_RefSpawnToolVersion';
            public $timestamps = false;

            protected $fillable = [
                'dwRefDataVersion', 'szVersionDescString'
            ];

            protected $casts = [
                'dwRefDataVersion' => 'integer',
    ];
        }