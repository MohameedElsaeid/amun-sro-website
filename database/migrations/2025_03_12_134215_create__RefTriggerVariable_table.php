<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTriggerVariableTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTriggerVariable', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('BindTriggerID');
            $table->string('CodeName128', 129);
            $table->string('Type', 33);
            $table->integer('Value');
            $table->string('Comment128', 129)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTriggerVariable');
    }
}
