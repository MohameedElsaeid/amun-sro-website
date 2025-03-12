        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefCollectionBookTheme extends Model
        {
            protected $table = '_RefCollectionBook_Theme';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'CodeName128', 'ObjName128', 'Name128', 'Desc128', 'CompleteNum'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'CompleteNum' => 'integer',
    ];
        }