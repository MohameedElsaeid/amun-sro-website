        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerVariable extends Model
        {
            protected $table = '_RefTriggerVariable';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'BindTriggerID', 'CodeName128', 'Type', 'Value', 'Comment128'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'BindTriggerID' => 'integer',
        'Value' => 'integer',
    ];
        }