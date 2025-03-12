        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefitemsBlock extends Model
        {
            protected $table = '_RefitemsBlock';
            public $timestamps = false;

            protected $fillable = [
                'RefItemID'
            ];

            protected $casts = [
                'RefItemID' => 'integer',
    ];
        }