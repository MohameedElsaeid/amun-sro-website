        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TestItemTNET extends Model
        {
            protected $table = 'test_item_TNET';
            public $timestamps = false;

            protected $fillable = [
                'CodeName'
            ];

            protected $casts = [
            ];
        }