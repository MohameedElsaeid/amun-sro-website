        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefMagicOptAssign extends Model
        {
            protected $table = '_RefMagicOptAssign';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Race', 'TID3', 'TID4', 'AvailMOpt1', 'AvailMOpt2', 'AvailMOpt3', 'AvailMOpt4', 'AvailMOpt5', 'AvailMOpt6', 'AvailMOpt7', 'AvailMOpt8', 'AvailMOpt9', 'AvailMOpt10', 'AvailMOpt11', 'AvailMOpt12', 'AvailMOpt13', 'AvailMOpt14', 'AvailMOpt15', 'AvailMOpt16', 'AvailMOpt17', 'AvailMOpt18', 'AvailMOpt19', 'AvailMOpt20', 'AvailMOpt21', 'AvailMOpt22', 'AvailMOpt23', 'AvailMOpt24', 'AvailMOpt25'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Race' => 'integer',
        'TID3' => 'integer',
        'TID4' => 'integer',
    ];
        }