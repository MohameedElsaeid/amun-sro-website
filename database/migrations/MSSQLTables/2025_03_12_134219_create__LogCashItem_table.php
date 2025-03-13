<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogCashItemTable extends Migration
{
    public function up(): void
    {
        Schema::create('_LogCashItem', function (Blueprint $table) {
            $table->integer('RefItemID');
            $table->integer('CharID');
            $table->smallInteger('Cnt');
            $table->dateTime('EventTime');
            $table->bigInteger('Serial64');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_LogCashItem');
    }
}
