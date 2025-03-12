<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogServerEventTable extends Migration
{
    public function up(): void
    {
        Schema::create('_LogServerEvent', function (Blueprint $table) {
            $table->integer('ID');
            $table->dateTime('EventTime');
            $table->integer('ServerEventID');
            $table->smallInteger('LogType');
            $table->string('strDesc', 128)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_LogServerEvent');
    }
}
