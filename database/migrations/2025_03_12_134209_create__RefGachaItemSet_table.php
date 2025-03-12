<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefGachaItemSetTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefGachaItemSet', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Set_ID');
            $table->integer('RefItemID');
            $table->smallInteger('Ratio');
            $table->smallInteger('Count');
            $table->integer('GachaID');
            $table->smallInteger('Visible');
            $table->integer('param1');
            $table->string('param1_Desc128', 129);
            $table->integer('param2');
            $table->string('param2_Desc128', 129);
            $table->integer('param3');
            $table->string('param3_Desc128', 129);
            $table->integer('param4');
            $table->string('param4_Desc128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefGachaItemSet');
    }
}
