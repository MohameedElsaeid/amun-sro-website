        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class JobRowsKill extends Model
        {
            protected $table = '_JobRowsKills';
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