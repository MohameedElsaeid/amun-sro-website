<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTriggerConditionTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTriggerCondition', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('RefTriggerCommonID');
            $table->string('OnTrue', 20);
            $table->string('OnFalse', 20);
            $table->smallInteger('Sequence');
            $table->string('ParamGroupCodeName128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTriggerCondition');
    }
}
