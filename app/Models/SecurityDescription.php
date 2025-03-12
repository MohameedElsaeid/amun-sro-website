        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SecurityDescription extends Model
        {
            protected $table = '_SecurityDescription';
            public $timestamps = false;

            protected $fillable = [
                'nID', 'szName', 'szDesc'
            ];

            protected $casts = [
                'nID' => 'integer',
    ];
        }