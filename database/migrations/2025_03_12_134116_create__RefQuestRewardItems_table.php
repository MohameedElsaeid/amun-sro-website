<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefQuestRewardItemsTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefQuestRewardItems', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('QuestID');
            $table->string('QuestCodeName', 128);
            $table->smallInteger('RewardType');
            $table->string('ItemCodeName', 128);
            $table->string('OptionalItemCode', 128);
            $table->integer('OptionalItemCnt');
            $table->integer('AchieveQuantity');
            $table->string('RentItemCodeName', 128);
            $table->integer('Param1');
            $table->string('Param1_Desc', 128);
            $table->integer('Param2');
            $table->string('Param2_Desc', 128);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefQuestRewardItems');
    }
}
