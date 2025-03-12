        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerCategoryBindTrigger extends Model
        {
            protected $table = '_RefTriggerCategoryBindTrigger';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'TriggerCategoryID', 'TriggerID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'TriggerCategoryID' => 'integer',
        'TriggerID' => 'integer',
    ];
        }