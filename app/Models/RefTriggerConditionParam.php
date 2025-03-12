        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerConditionParam extends Model
        {
            protected $table = '_RefTriggerConditionParam';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
    ];
        }