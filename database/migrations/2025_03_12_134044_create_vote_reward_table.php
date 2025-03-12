<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteRewardTable extends Migration
{
    public function up(): void
    {
        Schema::create('vote_reward', function (Blueprint $table) {
            $table->string('StrUserID', 25)->nullable();
            $table->string('votelaikas', 50)->nullable();
            $table->string('ip', 50)->nullable();
            $table->string('top1', 50)->nullable();
            $table->string('votekey', 50)->nullable();
            $table->string('top2', 50)->nullable();
            $table->string('top3', 50)->nullable();
            $table->string('top4', 50)->nullable();
            $table->string('top5', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vote_reward');
    }
}
