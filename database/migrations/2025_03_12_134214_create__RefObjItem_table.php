        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefObjItemTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefObjItem', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('MaxStack');
            $table->smallInteger('ReqGender');
            $table->integer('ReqStr');
            $table->integer('ReqInt');
            $table->smallInteger('ItemClass');
            $table->integer('SetID');
            $table->float('Dur_L');
            $table->float('Dur_U');
            $table->float('PD_L');
            $table->float('PD_U');
            $table->float('PDInc');
            $table->float('ER_L');
            $table->float('ER_U');
            $table->float('ERInc');
            $table->float('PAR_L');
            $table->float('PAR_U');
            $table->float('PARInc');
            $table->float('BR_L');
            $table->float('BR_U');
            $table->float('MD_L');
            $table->float('MD_U');
            $table->float('MDInc');
            $table->float('MAR_L');
            $table->float('MAR_U');
            $table->float('MARInc');
            $table->float('PDStr_L');
            $table->float('PDStr_U');
            $table->float('MDInt_L');
            $table->float('MDInt_U');
            $table->smallInteger('Quivered');
            $table->smallInteger('Ammo1_TID4');
            $table->smallInteger('Ammo2_TID4');
            $table->smallInteger('Ammo3_TID4');
            $table->smallInteger('Ammo4_TID4');
            $table->smallInteger('Ammo5_TID4');
            $table->smallInteger('SpeedClass');
            $table->smallInteger('TwoHanded');
            $table->smallInteger('Range');
            $table->float('PAttackMin_L');
            $table->float('PAttackMin_U');
            $table->float('PAttackMax_L');
            $table->float('PAttackMax_U');
            $table->float('PAttackInc');
            $table->float('MAttackMin_L');
            $table->float('MAttackMin_U');
            $table->float('MAttackMax_L');
            $table->float('MAttackMax_U');
            $table->float('MAttackInc');
            $table->float('PAStrMin_L');
            $table->float('PAStrMin_U');
            $table->float('PAStrMax_L');
            $table->float('PAStrMax_U');
            $table->float('MAInt_Min_L');
            $table->float('MAInt_Min_U');
            $table->float('MAInt_Max_L');
            $table->float('MAInt_Max_U');
            $table->float('HR_L');
            $table->float('HR_U');
            $table->float('HRInc');
            $table->float('CHR_L');
            $table->float('CHR_U');
            $table->integer('Param1');
            $table->string('Desc1_128', 129);
            $table->integer('Param2');
            $table->string('Desc2_128', 129);
            $table->integer('Param3');
            $table->string('Desc3_128', 129);
            $table->integer('Param4');
            $table->string('Desc4_128', 129);
            $table->integer('Param5');
            $table->string('Desc5_128', 129);
            $table->integer('Param6');
            $table->string('Desc6_128', 129);
            $table->integer('Param7');
            $table->string('Desc7_128', 129);
            $table->integer('Param8');
            $table->string('Desc8_128', 129);
            $table->integer('Param9');
            $table->string('Desc9_128', 129);
            $table->integer('Param10');
            $table->string('Desc10_128', 129);
            $table->integer('Param11');
            $table->string('Desc11_128', 129);
            $table->integer('Param12');
            $table->string('Desc12_128', 129);
            $table->integer('Param13');
            $table->string('Desc13_128', 129);
            $table->integer('Param14');
            $table->string('Desc14_128', 129);
            $table->integer('Param15');
            $table->string('Desc15_128', 129);
            $table->integer('Param16');
            $table->string('Desc16_128', 129);
            $table->integer('Param17');
            $table->string('Desc17_128', 129);
            $table->integer('Param18');
            $table->string('Desc18_128', 129);
            $table->integer('Param19');
            $table->string('Desc19_128', 129);
            $table->integer('Param20');
            $table->string('Desc20_128', 129);
            $table->smallInteger('MaxMagicOptCount');
            $table->smallInteger('ChildItemCount');
            $table->integer('Link');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefObjItem');
            }
        }