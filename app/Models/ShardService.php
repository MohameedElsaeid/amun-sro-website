        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ShardService extends Model
        {
            protected $table = '_ShardService';
            public $timestamps = false;

            protected $fillable = [
                'ShardID', 'ServiceType'
            ];

            protected $casts = [
                'ShardID' => 'integer',
        'ServiceType' => 'integer',
    ];
        }