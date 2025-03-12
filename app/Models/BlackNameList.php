        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class BlackNameList extends Model
        {
            protected $table = '_BlackNameList';
            public $timestamps = false;

            protected $fillable = [
                'BlacklistName'
            ];

            protected $casts = [
            ];
        }