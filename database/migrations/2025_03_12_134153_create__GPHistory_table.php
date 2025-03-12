<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGPHistoryTable extends Migration
{
    public function up(): void
    {
        Schema::create('_GPHistory', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('GuildID');
            $table->dateTime('UsedTime')->nullable();
            $table->string('CharName', 64);
            $table->integer('UsedGP');
            $table->smallInteger('Reason');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_GPHistory');
    }
}
