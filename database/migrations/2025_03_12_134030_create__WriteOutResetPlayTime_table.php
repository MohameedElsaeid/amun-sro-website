<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWriteOutResetPlayTimeTable extends Migration
{
    public function up(): void
    {
        Schema::create('_WriteOutResetPlayTime', function (Blueprint $table) {
            $table->integer('LatestResetTime');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_WriteOutResetPlayTime');
    }
}
