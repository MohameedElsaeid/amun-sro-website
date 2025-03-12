        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ILegendTool extends Model
        {
            protected $table = 'iLegend_Tool';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Service', 'Type', 'Target', 'Message', 'RefMobID', 'RefItemID', 'Amount', 'OptLvl', 'RegionID', 'PosX', 'PosY', 'PosZ', 'WorldID', 'CapeColor', 'StallTitle', 'StallGreating', 'StallSlot', 'InvSlot', 'ItemCount', 'ItemPrice', 'Date'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Service' => 'integer',
    ];
        }