        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefShopObject extends Model
        {
            protected $table = '_RefShopObject';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CodeName128'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }