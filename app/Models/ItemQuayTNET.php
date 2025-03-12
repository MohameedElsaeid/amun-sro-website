        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ItemQuayTNET extends Model
        {
            protected $table = 'Item_Quay_TNET';
            public $timestamps = false;

            protected $fillable = [
                'CodeName'
            ];

            protected $casts = [
            ];
        }