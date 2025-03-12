        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGachaNpcMap extends Model
        {
            protected $table = '_RefGachaNpcMap';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'NPC_ID', 'SelectionGachaID', 'WasteGachaID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'NPC_ID' => 'integer',
        'SelectionGachaID' => 'integer',
        'WasteGachaID' => 'integer',
    ];
        }