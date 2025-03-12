        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Cache extends Model
        {
            protected $table = 'cache';
            public $timestamps = false;

            protected $fillable = [
                'key', 'value', 'expiration'
            ];

            protected $casts = [
                'expiration' => 'integer',
    ];
        }