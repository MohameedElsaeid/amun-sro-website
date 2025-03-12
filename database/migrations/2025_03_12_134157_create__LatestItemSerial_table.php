<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatestItemSerialTable extends Migration
{
    public function up(): void
    {
        Schema::create('_LatestItemSerial', function (Blueprint $table) {
            $table->bigInteger('LatestItemSerial');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_LatestItemSerial');
    }
}
