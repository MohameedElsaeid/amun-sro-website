<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlagWorldEventParticipantsTable extends Migration
{
    public function up(): void
    {
        Schema::create('_FlagWorld_EventParticipants', function (Blueprint $table) {
            $table->integer('JID');
            $table->dateTime('LatestAttempt');
            $table->integer('Count');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_FlagWorld_EventParticipants');
    }
}
