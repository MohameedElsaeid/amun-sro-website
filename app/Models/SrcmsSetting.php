        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsSetting extends Model
        {
            protected $table = 'srcms_settings';
            public $timestamps = false;

            protected $fillable = [
                'value', 'valueName'
            ];

            protected $casts = [
            ];
        }