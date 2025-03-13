<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerEventRewardTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ServerEventReward', function (Blueprint $table) {
            $table->integer('ServerEventID');
            $table->integer('RewardID');
            $table->integer('RemainRewardTime');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ServerEventReward');
    }
}
