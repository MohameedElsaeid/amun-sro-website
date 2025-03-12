<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSiegeQuestRewardTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSiegeQuestReward', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('QuestID');
            $table->smallInteger('RewardType');
            $table->integer('RewardRefID');
            $table->integer('RewardValue');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSiegeQuestReward');
    }
}
