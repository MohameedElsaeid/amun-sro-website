        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ChestInfo extends Model
        {
            protected $table = '_ChestInfo';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'ChestSize'
            ];

            protected $casts = [
                'JID' => 'integer',
        'ChestSize' => 'integer',
    ];
        }