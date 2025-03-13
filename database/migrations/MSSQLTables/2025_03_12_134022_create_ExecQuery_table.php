<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecQueryTable extends Migration
{
    public function up(): void
    {
        Schema::create('ExecQuery', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('Day', 50);
            $table->string('Time', 50);
            $table->integer('DatabaseIndex');
            $table->string('Query', 8000);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ExecQuery');
    }
}
