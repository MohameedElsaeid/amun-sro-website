        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Pet extends Model
        {
            protected $table = 'Pets';
            public $timestamps = false;

            protected $fillable = [
                'ID'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }