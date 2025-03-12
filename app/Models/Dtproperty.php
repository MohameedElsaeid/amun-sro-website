        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Dtproperty extends Model
        {
            protected $table = 'dtproperties';
            public $timestamps = false;

            protected $fillable = [
                'objectid', 'property', 'value', 'uvalue', 'lvalue', 'version'
            ];

            protected $casts = [
                'objectid' => 'integer',
        'version' => 'integer',
    ];
        }