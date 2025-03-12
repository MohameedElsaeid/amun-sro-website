<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteRewardLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('vote_reward_log', function (Blueprint $table) {
            $table->string('username', 50)->nullable();
            $table->string('ip', 50)->nullable();
            $table->string('date', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vote_reward_log');
    }
}
