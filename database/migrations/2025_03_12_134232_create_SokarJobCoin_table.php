<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSokarJobCoinTable extends Migration
{
    public function up(): void
    {
        Schema::create('SokarJobCoin', function (Blueprint $table) {
            $table->integer('CharID')->nullable();
            $table->integer('Amount')->nullable();
            $table->dateTime('EventTime')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SokarJobCoin');
    }
}
