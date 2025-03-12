        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class LogEventItem extends Model
        {
            protected $table = '_LogEventItem';
            public $timestamps = false;

            protected $fillable = [
                'EventTime', 'CharID', 'ItemRefID', 'dwData', 'TargetStorage', 'Operation', 'Slot_From', 'Slot_To', 'EventPos', 'strDesc', 'Serial64', 'Gold'
            ];

            protected $casts = [
                'EventTime' => 'datetime',
        'CharID' => 'integer',
        'ItemRefID' => 'integer',
        'dwData' => 'integer',
        'TargetStorage' => 'integer',
        'Operation' => 'integer',
        'Slot_From' => 'integer',
        'Slot_To' => 'integer',
        'Serial64' => 'integer',
        'Gold' => 'integer',
    ];
        }