        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerAction extends Model
        {
            protected $table = '_RefTriggerAction';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'RefTriggerCommonID', 'Delay', 'ParamGroupCodeName128'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
        'Delay' => 'integer',
    ];
        }