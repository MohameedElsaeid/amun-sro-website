<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefServerEventRewardTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefServerEventReward', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('RewardID');
            $table->integer('OwnerServerEventID');
            $table->integer('RefRewardID');
            $table->smallInteger('Quantity');
            $table->smallInteger('RewardClass');
            $table->smallInteger('MasterReward');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefServerEventReward');
    }
}
