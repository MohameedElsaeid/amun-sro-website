<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrijobRewardsTable extends Migration
{
    public function up(): void
    {
        Schema::create('_TrijobRewards', function (Blueprint $table) {
            $table->smallInteger('JobType');
            $table->bigInteger('Reward');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_TrijobRewards');
    }
}
