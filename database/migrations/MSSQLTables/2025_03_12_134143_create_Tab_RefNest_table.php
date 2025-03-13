<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabRefNestTable extends Migration
{
    public function up(): void
    {
        Schema::create('Tab_RefNest', function (Blueprint $table) {
            $table->integer('dwNestID');
            $table->integer('dwHiveID');
            $table->integer('dwTacticsID');
            $table->smallInteger('nRegionDBID');
            $table->float('fLocalPosX')->nullable();
            $table->float('fLocalPosY')->nullable();
            $table->float('fLocalPosZ')->nullable();
            $table->smallInteger('wInitialDir')->nullable();
            $table->integer('nRadius')->nullable();
            $table->integer('nGenerateRadius')->nullable();
            $table->integer('nChampionGenPercentage')->nullable();
            $table->integer('dwDelayTimeMin')->nullable();
            $table->integer('dwDelayTimeMax')->nullable();
            $table->integer('dwMaxTotalCount');
            $table->smallInteger('btFlag')->nullable();
            $table->smallInteger('btRespawn');
            $table->smallInteger('btType');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Tab_RefNest');
    }
}
