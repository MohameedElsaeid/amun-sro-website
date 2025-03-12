        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ItemsDrop extends Model
        {
            protected $table = '_ItemsDrop';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'Serial64'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'Serial64' => 'integer',
    ];
        }