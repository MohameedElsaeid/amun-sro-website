        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGachaCode extends Model
        {
            protected $table = '_RefGachaCode';
            public $timestamps = false;

            protected $fillable = [
                'CodeName128', 'GachaSetID'
            ];

            protected $casts = [
                'GachaSetID' => 'integer',
    ];
        }