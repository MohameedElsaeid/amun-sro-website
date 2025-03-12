        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class JID extends Model
        {
            protected $table = 'JID';
            public $timestamps = false;

            protected $fillable = [
                'ID'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }