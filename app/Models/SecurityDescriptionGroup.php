        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SecurityDescriptionGroup extends Model
        {
            protected $table = '_SecurityDescriptionGroup';
            public $timestamps = false;

            protected $fillable = [
                'nID', 'szName', 'szDesc'
            ];

            protected $casts = [
                'nID' => 'integer',
    ];
        }