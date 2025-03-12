        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerBindAction extends Model
        {
            protected $table = '_RefTriggerBindAction';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'TriggerID', 'TriggerActionID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerActionID' => 'integer',
    ];
        }