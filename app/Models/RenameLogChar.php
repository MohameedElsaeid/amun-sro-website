        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RenameLogChar extends Model
        {
            protected $table = '_RenameLog_Char';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CharID', 'OldName', 'NewName', 'Time'
            ];

            protected $casts = [
                'ID' => 'integer',
        'CharID' => 'integer',
        'Time' => 'datetime',
    ];
        }