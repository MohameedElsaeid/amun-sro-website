        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class EquipName extends Model
        {
            protected $table = '_EquipName';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'TextString', 'EndTextString'
            ];

            protected $casts = [
            ];
        }