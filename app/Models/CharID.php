        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharID extends Model
        {
            protected $table = 'CharID';
            public $timestamps = false;

            protected $fillable = [
                'ID'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }