<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOPLOGTable extends Migration
{
    public function up(): void
    {
        Schema::create('TOPLOG', function (Blueprint $table) {
            $table->integer('No.');
            $table->integer('CharID')->nullable();
            $table->text('Charname')->nullable();
            $table->dateTime('Date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('TOPLOG');
    }
}
