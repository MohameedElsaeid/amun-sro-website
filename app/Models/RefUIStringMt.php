        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefUIStringMt extends Model
        {
            protected $table = '_RefUIString_Mt';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }