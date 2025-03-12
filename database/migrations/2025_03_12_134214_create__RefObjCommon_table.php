        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefObjCommonTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefObjCommon', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('ObjName128', 129);
            $table->string('OrgObjCodeName128', 129);
            $table->string('NameStrID128', 129);
            $table->string('DescStrID128', 129);
            $table->smallInteger('CashItem');
            $table->smallInteger('Bionic');
            $table->smallInteger('TypeID1');
            $table->smallInteger('TypeID2');
            $table->smallInteger('TypeID3');
            $table->smallInteger('TypeID4');
            $table->integer('DecayTime');
            $table->smallInteger('Country');
            $table->smallInteger('Rarity');
            $table->smallInteger('CanTrade');
            $table->smallInteger('CanSell');
            $table->smallInteger('CanBuy');
            $table->smallInteger('CanBorrow');
            $table->smallInteger('CanDrop');
            $table->smallInteger('CanPick');
            $table->smallInteger('CanRepair');
            $table->smallInteger('CanRevive');
            $table->smallInteger('CanUse');
            $table->smallInteger('CanThrow');
            $table->integer('Price');
            $table->integer('CostRepair');
            $table->integer('CostRevive');
            $table->integer('CostBorrow');
            $table->integer('KeepingFee');
            $table->integer('SellPrice');
            $table->integer('ReqLevelType1');
            $table->smallInteger('ReqLevel1');
            $table->integer('ReqLevelType2');
            $table->smallInteger('ReqLevel2');
            $table->integer('ReqLevelType3');
            $table->smallInteger('ReqLevel3');
            $table->integer('ReqLevelType4');
            $table->smallInteger('ReqLevel4');
            $table->integer('MaxContain');
            $table->smallInteger('RegionID');
            $table->smallInteger('Dir');
            $table->smallInteger('OffsetX');
            $table->smallInteger('OffsetY');
            $table->smallInteger('OffsetZ');
            $table->smallInteger('Speed1');
            $table->smallInteger('Speed2');
            $table->integer('Scale');
            $table->smallInteger('BCHeight');
            $table->smallInteger('BCRadius');
            $table->integer('EventID');
            $table->string('AssocFileObj128', 129);
            $table->string('AssocFileDrop128', 129);
            $table->string('AssocFileIcon128', 129);
            $table->string('AssocFile1_128', 129);
            $table->string('AssocFile2_128', 129);
            $table->integer('Link');
            $table->string('WebName', 255);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefObjCommon');
            }
        }