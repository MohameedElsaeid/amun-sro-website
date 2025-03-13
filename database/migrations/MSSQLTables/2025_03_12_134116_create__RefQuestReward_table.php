<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefQuestRewardTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefQuestReward', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('QuestID');
            $table->string('QuestCodeName', 128);
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
            $table->integer('AP');
            $table->string('APType', 128);
            $table->smallInteger('Hwan');
            $table->smallInteger('Inventory');
            $table->smallInteger('ItemRewardType');
            $table->smallInteger('SelectionCnt');
            $table->bigInteger('Param1');
            $table->string('Param1_Desc', 128);
            $table->integer('Param2');
            $table->string('Param2_Desc', 128);
            $table->integer('Param3');
            $table->string('Param3_Desc', 128);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefQuestReward');
    }
}
