        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGameWorldGroup extends Model
        {
            protected $table = '_RefGameWorldGroup';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CodeName128', 'ObjName128', 'ConfigGroupCodeName128'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }