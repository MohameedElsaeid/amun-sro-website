<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSMCLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('_SMCLog', function (Blueprint $table) {
            $table->string('szUserID', 128);
            $table->smallInteger('Catagory');
            $table->string('szLog', 256);
            $table->dateTime('dLogDate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_SMCLog');
    }
}
