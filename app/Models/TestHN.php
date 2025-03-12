        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TestHN extends Model
        {
            protected $table = 'Test_HN';
            public $timestamps = false;

            protected $fillable = [
                'STT', 'Username', 'CodeCB', 'H?', 'Tên', 'Email', 'password', 'F_ONLINE'
            ];

            protected $casts = [
                'STT' => 'float',
        'F_ONLINE' => 'float',
    ];
        }