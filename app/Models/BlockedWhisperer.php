        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class BlockedWhisperer extends Model
        {
            protected $table = '_BlockedWhisperers';
            public $timestamps = false;

            protected $fillable = [
                'OwnerID', 'TargetName'
            ];

            protected $casts = [
                'OwnerID' => 'integer',
    ];
        }