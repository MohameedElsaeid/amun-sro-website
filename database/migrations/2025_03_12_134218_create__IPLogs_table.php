<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIPLogsTable extends Migration
{
    public function up(): void
    {
        Schema::create('_IPLogs', function (Blueprint $table) {
            $table->integer('No.');
            $table->integer('CharID')->nullable();
            $table->text('Charname')->nullable();
            $table->text('IP')->nullable();
            $table->dateTime('Date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_IPLogs');
    }
}
