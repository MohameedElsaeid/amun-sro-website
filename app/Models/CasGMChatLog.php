        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CasGMChatLog extends Model
        {
            protected $table = '_CasGMChatLog';
            public $timestamps = false;

            protected $fillable = [
                'nSerial', 'szGM', 'wShardID', 'szCharName', 'nCasSerial', 'szGMChatLog', 'dWritten'
            ];

            protected $casts = [
                'nSerial' => 'integer',
        'wShardID' => 'integer',
        'nCasSerial' => 'integer',
        'dWritten' => 'datetime',
    ];
        }