        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeDungeon extends Model
        {
            protected $table = '_RefSiegeDungeon';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'FortressID', 'WorldID', 'MaxCreateCount', 'EntryGold', 'EntryGP'
            ];

            protected $casts = [
                'Service' => 'integer',
        'FortressID' => 'integer',
        'WorldID' => 'integer',
        'MaxCreateCount' => 'integer',
        'EntryGold' => 'integer',
        'EntryGP' => 'integer',
    ];
        }