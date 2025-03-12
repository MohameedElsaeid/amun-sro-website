        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SystemService extends Model
        {
            protected $table = 'SystemService';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Service', 'Run', 'Type', 'SystemName'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Service' => 'integer',
    ];
        }