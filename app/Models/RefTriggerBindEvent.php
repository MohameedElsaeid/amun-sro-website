        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerBindEvent extends Model
        {
            protected $table = '_RefTriggerBindEvent';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'TriggerID', 'TriggerEventID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerEventID' => 'integer',
    ];
        }