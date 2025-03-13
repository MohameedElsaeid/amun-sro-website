<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefServerEventRewardExpUPForPlayersTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefServerEventReward_ExpUPForPlayers', function (Blueprint $table) {
            $table->integer('OwnerRewardID');
            $table->integer('ApplyTime');
            $table->smallInteger('ApplyExpRatio');
            $table->smallInteger('ApplySExpRatio');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefServerEventReward_ExpUPForPlayers');
    }
}
