<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSiegeFortressBattleRankTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSiegeFortressBattleRank', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->smallInteger('RankLvl');
            $table->string('RankName', 129);
            $table->integer('ReqPKCount');
            $table->integer('BindedSkillID');
            $table->string('CrestPath128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSiegeFortressBattleRank');
    }
}
