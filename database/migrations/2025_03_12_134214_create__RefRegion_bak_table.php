<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefRegionBakTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefRegion_bak', function (Blueprint $table) {
            $table->smallInteger('wRegionID');
            $table->smallInteger('X');
            $table->smallInteger('Z');
            $table->string('ContinentName', 128);
            $table->string('AreaName', 128);
            $table->smallInteger('IsBattleField');
            $table->integer('Climate');
            $table->integer('MaxCapacity');
            $table->integer('AssocObjID');
            $table->integer('AssocServer');
            $table->string('AssocFile256', 256);
            $table->integer('LinkedRegion_1')->nullable();
            $table->integer('LinkedRegion_2')->nullable();
            $table->integer('LinkedRegion_3')->nullable();
            $table->integer('LinkedRegion_4')->nullable();
            $table->integer('LinkedRegion_5')->nullable();
            $table->integer('LinkedRegion_6')->nullable();
            $table->integer('LinkedRegion_7')->nullable();
            $table->integer('LinkedRegion_8')->nullable();
            $table->integer('LinkedRegion_9')->nullable();
            $table->integer('LinkedRegion_10')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefRegion_bak');
    }
}
