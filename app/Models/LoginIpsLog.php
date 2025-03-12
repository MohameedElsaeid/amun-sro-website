        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class LoginIpsLog extends Model
        {
            protected $table = '_Login_Ips_Log';
            public $timestamps = false;

            protected $fillable = [
                'Charname', 'IP'
            ];

            protected $casts = [
            ];
        }