<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCustomizingReservedItemDropForMonsterTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefCustomizingReservedItemDropForMonster', function (Blueprint $table) {
            $table->integer('RefMonsterID');
            $table->smallInteger('Rarity');
            $table->integer('Command');
            $table->smallInteger('DropGroupType');
            $table->integer('Param1')->nullable();
            $table->integer('Param2')->nullable();
            $table->integer('Param3')->nullable();
            $table->integer('Param4')->nullable();
            $table->integer('Param5')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefCustomizingReservedItemDropForMonster');
    }
}
