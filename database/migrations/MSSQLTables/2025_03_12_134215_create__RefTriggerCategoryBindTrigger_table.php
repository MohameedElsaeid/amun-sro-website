<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTriggerCategoryBindTriggerTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTriggerCategoryBindTrigger', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('TriggerCategoryID');
            $table->integer('TriggerID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTriggerCategoryBindTrigger');
    }
}
