<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTriggerBindConditionTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTriggerBindCondition', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('TriggerID');
            $table->integer('TriggerConditionID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTriggerBindCondition');
    }
}
