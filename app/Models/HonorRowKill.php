        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class HonorRowKill extends Model
        {
            protected $table = '_HonorRowKills';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Kesen', 'Kesilen', 'DescType'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Kesen' => 'integer',
        'Kesilen' => 'integer',
        'DescType' => 'integer',
    ];
        }