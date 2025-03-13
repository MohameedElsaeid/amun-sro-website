<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabRefHiveTable extends Migration
{
    public function up(): void
    {
        Schema::create('Tab_RefHive', function (Blueprint $table) {
            $table->integer('dwHiveID');
            $table->smallInteger('btKeepMonsterCountType')->nullable();
            $table->integer('dwOverwriteMaxTotalCount')->nullable();
            $table->float('fMonsterCountPerPC')->nullable();
            $table->integer('dwSpawnSpeedIncreaseRate')->nullable();
            $table->integer('dwMaxIncreaseRate')->nullable();
            $table->smallInteger('btFlag')->nullable();
            $table->smallInteger('GameWorldID')->nullable();
            $table->smallInteger('HatchObjType')->nullable();
            $table->string('szDescString128', 128)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Tab_RefHive');
    }
}
