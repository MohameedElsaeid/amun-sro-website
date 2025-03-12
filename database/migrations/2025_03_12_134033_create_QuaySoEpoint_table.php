<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuaySoEpointTable extends Migration
{
    public function up(): void
    {
        Schema::create('QuaySoEpoint', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('UserCash', 20)->nullable();
            $table->integer('Server')->nullable();
            $table->integer('CharID')->nullable();
            $table->string('CharName', 20)->nullable();
            $table->integer('SP_Own')->nullable();
            $table->integer('SP_Before')->nullable();
            $table->integer('SP_After')->nullable();
            $table->dateTime('Regdate')->nullable();
            $table->string('SourcePoint', 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('QuaySoEpoint');
    }
}
