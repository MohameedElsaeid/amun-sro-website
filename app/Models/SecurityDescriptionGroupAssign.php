        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SecurityDescriptionGroupAssign extends Model
        {
            protected $table = '_SecurityDescriptionGroupAssign';
            public $timestamps = false;

            protected $fillable = [
                'nGroupID', 'nDescriptionID'
            ];

            protected $casts = [
                'nGroupID' => 'integer',
        'nDescriptionID' => 'integer',
    ];
        }