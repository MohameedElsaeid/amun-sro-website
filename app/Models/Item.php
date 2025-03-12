        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Item extends Model
        {
            protected $table = 'Items';
            public $timestamps = false;

            protected $fillable = [
                'ID'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }