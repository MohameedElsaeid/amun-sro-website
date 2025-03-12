        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharNickNameList extends Model
        {
            protected $table = '_CharNickNameList';
            public $timestamps = false;

            protected $fillable = [
                'NickName16', 'CharID'
            ];

            protected $casts = [
                'CharID' => 'integer',
    ];
        }