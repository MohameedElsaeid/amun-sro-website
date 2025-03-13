<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogEventCharTable extends Migration
{
    public function up(): void
    {
        Schema::create('_LogEventChar', function (Blueprint $table) {
            $table->integer('CharID');
            $table->dateTime('EventTime');
            $table->smallInteger('EventID');
            $table->integer('Data1');
            $table->integer('Data2');
            $table->string('EventPos', 64)->nullable();
            $table->string('strDesc', 128)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_LogEventChar');
    }
}
