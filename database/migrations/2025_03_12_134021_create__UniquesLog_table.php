<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniquesLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('_UniquesLog', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Type');
            $table->string('CodeName128', 128);
            $table->string('Killer', 60)->nullable();
            $table->string('Date', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_UniquesLog');
    }
}
