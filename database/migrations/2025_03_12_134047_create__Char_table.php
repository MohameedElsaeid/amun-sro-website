        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCharTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Char', function (Blueprint $table) {
            $table->integer('CharID');
            $table->smallInteger('Deleted');
            $table->integer('RefObjID');
            $table->string('CharName16', 64);
            $table->string('NickName16', 17);
            $table->smallInteger('Scale');
            $table->smallInteger('CurLevel');
            $table->smallInteger('MaxLevel');
            $table->bigInteger('ExpOffset');
            $table->integer('SExpOffset');
            $table->smallInteger('Strength');
            $table->smallInteger('Intellect');
            $table->bigInteger('RemainGold');
            $table->integer('RemainSkillPoint');
            $table->smallInteger('RemainStatPoint');
            $table->smallInteger('RemainHwanCount');
            $table->integer('GatheredExpPoint');
            $table->integer('HP');
            $table->integer('MP');
            $table->smallInteger('LatestRegion');
            $table->float('PosX');
            $table->float('PosY');
            $table->float('PosZ');
            $table->integer('AppointedTeleport');
            $table->smallInteger('AutoInvestExp');
            $table->integer('InventorySize');
            $table->smallInteger('DailyPK');
            $table->smallInteger('TotalPK');
            $table->integer('PKPenaltyPoint');
            $table->integer('TPP');
            $table->integer('PenaltyForfeit');
            $table->integer('JobPenaltyTime');
            $table->smallInteger('JobLvl_Trader');
            $table->integer('Trader_Exp');
            $table->smallInteger('JobLvl_Hunter');
            $table->integer('Hunter_Exp');
            $table->smallInteger('JobLvl_Robber');
            $table->integer('Robber_Exp');
            $table->integer('GuildID')->nullable();
            $table->dateTime('LastLogout');
            $table->smallInteger('TelRegion');
            $table->float('TelPosX');
            $table->float('TelPosY');
            $table->float('TelPosZ');
            $table->smallInteger('DiedRegion');
            $table->float('DiedPosX');
            $table->float('DiedPosY');
            $table->float('DiedPosZ');
            $table->smallInteger('WorldID');
            $table->smallInteger('TelWorldID');
            $table->smallInteger('DiedWorldID');
            $table->smallInteger('HwanLevel');
            $table->integer('ItemPoints');
            $table->integer('PVPPoints');
            $table->integer('JOBPoints');
            $table->integer('Rarity');
            $table->integer('Support');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Char');
            }
        }