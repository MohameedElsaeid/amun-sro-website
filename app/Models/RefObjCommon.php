        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefObjCommon extends Model
        {
            protected $table = '_RefObjCommon';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'CodeName128', 'ObjName128', 'OrgObjCodeName128', 'NameStrID128', 'DescStrID128', 'CashItem', 'Bionic', 'TypeID1', 'TypeID2', 'TypeID3', 'TypeID4', 'DecayTime', 'Country', 'Rarity', 'CanTrade', 'CanSell', 'CanBuy', 'CanBorrow', 'CanDrop', 'CanPick', 'CanRepair', 'CanRevive', 'CanUse', 'CanThrow', 'Price', 'CostRepair', 'CostRevive', 'CostBorrow', 'KeepingFee', 'SellPrice', 'ReqLevelType1', 'ReqLevel1', 'ReqLevelType2', 'ReqLevel2', 'ReqLevelType3', 'ReqLevel3', 'ReqLevelType4', 'ReqLevel4', 'MaxContain', 'RegionID', 'Dir', 'OffsetX', 'OffsetY', 'OffsetZ', 'Speed1', 'Speed2', 'Scale', 'BCHeight', 'BCRadius', 'EventID', 'AssocFileObj128', 'AssocFileDrop128', 'AssocFileIcon128', 'AssocFile1_128', 'AssocFile2_128', 'Link', 'WebName'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'CashItem' => 'integer',
        'Bionic' => 'integer',
        'TypeID1' => 'integer',
        'TypeID2' => 'integer',
        'TypeID3' => 'integer',
        'TypeID4' => 'integer',
        'DecayTime' => 'integer',
        'Country' => 'integer',
        'Rarity' => 'integer',
        'CanTrade' => 'integer',
        'CanSell' => 'integer',
        'CanBuy' => 'integer',
        'CanBorrow' => 'integer',
        'CanDrop' => 'integer',
        'CanPick' => 'integer',
        'CanRepair' => 'integer',
        'CanRevive' => 'integer',
        'CanUse' => 'integer',
        'CanThrow' => 'integer',
        'Price' => 'integer',
        'CostRepair' => 'integer',
        'CostRevive' => 'integer',
        'CostBorrow' => 'integer',
        'KeepingFee' => 'integer',
        'SellPrice' => 'integer',
        'ReqLevelType1' => 'integer',
        'ReqLevel1' => 'integer',
        'ReqLevelType2' => 'integer',
        'ReqLevel2' => 'integer',
        'ReqLevelType3' => 'integer',
        'ReqLevel3' => 'integer',
        'ReqLevelType4' => 'integer',
        'ReqLevel4' => 'integer',
        'MaxContain' => 'integer',
        'RegionID' => 'integer',
        'Dir' => 'integer',
        'OffsetX' => 'integer',
        'OffsetY' => 'integer',
        'OffsetZ' => 'integer',
        'Speed1' => 'integer',
        'Speed2' => 'integer',
        'Scale' => 'integer',
        'BCHeight' => 'integer',
        'BCRadius' => 'integer',
        'EventID' => 'integer',
        'Link' => 'integer',
    ];
        }