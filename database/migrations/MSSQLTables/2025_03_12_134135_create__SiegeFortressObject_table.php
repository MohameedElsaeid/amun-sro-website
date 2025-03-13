<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiegeFortressObjectTable extends Migration
{
    public function up(): void
    {
        Schema::create('_SiegeFortressObject', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('FortressID');
            $table->integer('OwnerGuildID');
            $table->integer('RefObjID');
            $table->integer('HP');
            $table->smallInteger('Region');
            $table->float('PosX');
            $table->float('PosY');
            $table->float('PosZ');
            $table->float('Direction');
            $table->smallInteger('OwnerLevel');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_SiegeFortressObject');
    }
}
