        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefMagicOptByItemOptLevel extends Model
        {
            protected $table = '_RefMagicOptByItemOptLevel';
            public $timestamps = false;

            protected $fillable = [
                'Link', 'RefMagicOptID', 'MagicOptValue', 'TooltipType', 'TooltipCodename'
            ];

            protected $casts = [
                'Link' => 'integer',
        'RefMagicOptID' => 'integer',
        'MagicOptValue' => 'integer',
        'TooltipType' => 'integer',
    ];
        }