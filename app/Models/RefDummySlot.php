        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefDummySlot extends Model
        {
            protected $table = '_RefDummySlot';
            public $timestamps = false;

            protected $fillable = [
                'cnt'
            ];

            protected $casts = [
                'cnt' => 'integer',
    ];
        }