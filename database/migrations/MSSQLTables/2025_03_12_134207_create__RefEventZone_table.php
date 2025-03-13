<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefEventZoneTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefEventZone', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('ZoneName', 128);
            $table->string('EventName', 128);
            $table->integer('Param1')->nullable();
            $table->integer('Param2')->nullable();
            $table->integer('Param3')->nullable();
            $table->integer('Param4')->nullable();
            $table->integer('Param5')->nullable();
            $table->string('strParam1', 128)->nullable();
            $table->string('strParam2', 128)->nullable();
            $table->string('strParam3', 128)->nullable();
            $table->string('strParam4', 128)->nullable();
            $table->string('strParam5', 128)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefEventZone');
    }
}
