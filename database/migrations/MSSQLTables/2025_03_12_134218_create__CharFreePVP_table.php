<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharFreePVPTable extends Migration
{
    public function up(): void
    {
        Schema::create('_CharFreePVP', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('Points')->nullable();
            $table->integer('Kills');
            $table->integer('Deaths');
            $table->string('LastKill', 12)->nullable();
            $table->dateTime('Date')->nullable();
            $table->integer('CurChamp')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_CharFreePVP');
    }
}
