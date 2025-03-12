        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefShardContentConfig extends Model
        {
            protected $table = '_RefShardContentConfig';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'CodeName128', 'CodeDesc128', 'Value', 'Type'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
    ];
        }