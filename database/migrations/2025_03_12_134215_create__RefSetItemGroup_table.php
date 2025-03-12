<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSetItemGroupTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSetItemGroup', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('ObjName128', 129);
            $table->string('NameStrID128', 129);
            $table->string('DescStrID128', 129);
            $table->smallInteger('SetEffectMask');
            $table->integer('SetMagicMask');
            $table->integer('2SetMOptGroupID');
            $table->integer('3SetMOptGroupID');
            $table->integer('4SetMOptGroupID');
            $table->integer('5SetMOptGroupID');
            $table->integer('6SetMOptGroupID');
            $table->integer('7SetMOptGroupID');
            $table->integer('8SetMOptGroupID');
            $table->integer('9SetMOptGroupID');
            $table->integer('10SetMOptGroupID');
            $table->integer('11SetMOptGroupID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSetItemGroup');
    }
}
