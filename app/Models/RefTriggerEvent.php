        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerEvent extends Model
        {
            protected $table = '_RefTriggerEvent';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'RefTriggerCommonID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
    ];
        }