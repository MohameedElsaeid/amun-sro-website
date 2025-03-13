<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSiegeDungeonTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSiegeDungeon', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('FortressID');
            $table->integer('WorldID');
            $table->smallInteger('MaxCreateCount');
            $table->bigInteger('EntryGold');
            $table->integer('EntryGP');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSiegeDungeon');
    }
}
