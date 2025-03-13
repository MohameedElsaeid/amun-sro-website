<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSiegeQuestTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSiegeQuest', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('QuestID');
            $table->string('QuestName', 129);
            $table->smallInteger('QuestType');
            $table->smallInteger('RewardConditionTargetCount');
            $table->smallInteger('IsAccumulation');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSiegeQuest');
    }
}
