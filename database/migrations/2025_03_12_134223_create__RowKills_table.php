<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRowKillsTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RowKills', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('KillerID')->nullable();
            $table->string('KilledID', 50)->nullable();
            $table->integer('Kills')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RowKills');
    }
}
