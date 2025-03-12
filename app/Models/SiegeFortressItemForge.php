        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SiegeFortressItemForge extends Model
        {
            protected $table = '_SiegeFortressItemForge';
            public $timestamps = false;

            protected $fillable = [
                'FortressID', 'ItemRefID', 'Amount', 'Finished', 'StartDate', 'FinishDate'
            ];

            protected $casts = [
                'FortressID' => 'integer',
        'ItemRefID' => 'integer',
        'Amount' => 'integer',
        'Finished' => 'integer',
        'StartDate' => 'datetime',
        'FinishDate' => 'datetime',
    ];
        }