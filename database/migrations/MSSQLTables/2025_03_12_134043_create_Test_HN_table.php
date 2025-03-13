<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestHNTable extends Migration
{
    public function up(): void
    {
        Schema::create('Test_HN', function (Blueprint $table) {
            $table->float('STT')->nullable();
            $table->string('Username', 255)->nullable();
            $table->string('CodeCB', 255)->nullable();
            $table->string('H?', 255)->nullable();
            $table->string('T�n', 255)->nullable();
            $table->string('Email', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->float('F_ONLINE')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Test_HN');
    }
}
