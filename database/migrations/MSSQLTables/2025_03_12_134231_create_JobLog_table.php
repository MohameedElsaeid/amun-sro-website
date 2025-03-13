<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('JobLog', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->integer('Amount')->nullable();
            $table->integer('Limited')->nullable();
            $table->dateTime('Date')->nullable();
            $table->integer('TotalAmount')->nullable();
            $table->integer('index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('JobLog');
    }
}
