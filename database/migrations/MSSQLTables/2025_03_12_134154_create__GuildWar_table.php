<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildWarTable extends Migration
{
    public function up(): void
    {
        Schema::create('_GuildWar', function (Blueprint $table) {
            $table->integer('ID');
            $table->smallInteger('WarType');
            $table->smallInteger('VictoryPointIndex');
            $table->integer('LodgedGold');
            $table->dateTime('WarEndTime')->nullable();
            $table->integer('Guild1');
            $table->integer('Guild2');
            $table->integer('PointGain1');
            $table->integer('PointGain2');
            $table->integer('Data1');
            $table->integer('Data2');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_GuildWar');
    }
}
