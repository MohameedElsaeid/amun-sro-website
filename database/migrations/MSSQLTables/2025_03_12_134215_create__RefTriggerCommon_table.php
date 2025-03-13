<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTriggerCommonTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTriggerCommon', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('ObjName128', 129);
            $table->smallInteger('TID1');
            $table->smallInteger('TID2');
            $table->smallInteger('TID3');
            $table->smallInteger('TID4');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTriggerCommon');
    }
}
