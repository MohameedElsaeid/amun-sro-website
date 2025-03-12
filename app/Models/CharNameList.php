        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharNameList extends Model
        {
            protected $table = '_CharNameList';
            public $timestamps = false;

            protected $fillable = [
                'CharName16', 'CharID'
            ];

            protected $casts = [
                'CharID' => 'integer',
    ];
        }