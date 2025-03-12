        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefitemsAllow extends Model
        {
            protected $table = '_RefitemsAllow';
            public $timestamps = false;

            protected $fillable = [
                'RefItemID'
            ];

            protected $casts = [
                'RefItemID' => 'integer',
    ];
        }