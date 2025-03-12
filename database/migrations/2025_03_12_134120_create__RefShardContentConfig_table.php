<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefShardContentConfigTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefShardContentConfig', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('CodeDesc128', 129);
            $table->string('Value', 129);
            $table->string('Type', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefShardContentConfig');
    }
}
