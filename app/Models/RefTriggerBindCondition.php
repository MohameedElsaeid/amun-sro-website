        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerBindCondition extends Model
        {
            protected $table = '_RefTriggerBindCondition';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'TriggerID', 'TriggerConditionID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerConditionID' => 'integer',
    ];
        }