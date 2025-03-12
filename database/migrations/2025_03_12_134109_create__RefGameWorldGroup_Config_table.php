<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefGameWorldGroupConfigTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefGameWorldGroup_Config', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('GroupCodeName128', 129);
            $table->string('ValueCodeName128', 129);
            $table->string('Value', 129);
            $table->string('Type', 20);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefGameWorldGroup_Config');
    }
}
