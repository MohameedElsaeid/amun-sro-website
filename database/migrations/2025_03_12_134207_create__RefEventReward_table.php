        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefEventRewardTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefEventReward', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('EventID');
            $table->string('EventCodeName', 128);
            $table->smallInteger('IsView');
            $table->smallInteger('IsBasicReward');
            $table->smallInteger('IsItemReward');
            $table->smallInteger('IsCheckCondition');
            $table->smallInteger('IsCheckCountry');
            $table->smallInteger('IsCheckClass');
            $table->smallInteger('IsCheckGender');
            $table->integer('Gold');
            $table->integer('Exp');
            $table->integer('SPExp');
            $table->integer('SP');
            $table->smallInteger('Hwan');
            $table->smallInteger('Inventory');
            $table->smallInteger('ItemRewardType');
            $table->smallInteger('SelectionCnt');
            $table->integer('Param1');
            $table->string('Param1_Desc', 128);
            $table->integer('Param2');
            $table->string('Param2_Desc', 128);
            $table->integer('Param3');
            $table->string('Param3_Desc', 128);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefEventReward');
            }
        }