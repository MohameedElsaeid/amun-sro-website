<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogEventSiegeFortressTable extends Migration
{
    public function up(): void
    {
        Schema::create('_LogEventSiegeFortress', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('FortressID');
            $table->dateTime('EventTime');
            $table->smallInteger('EventID');
            $table->integer('CharID');
            $table->integer('Data1');
            $table->integer('Data2');
            $table->string('strDesc', 128)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_LogEventSiegeFortress');
    }
}
