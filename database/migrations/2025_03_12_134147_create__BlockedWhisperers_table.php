<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockedWhisperersTable extends Migration
{
    public function up(): void
    {
        Schema::create('_BlockedWhisperers', function (Blueprint $table) {
            $table->integer('OwnerID');
            $table->string('TargetName', 64);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_BlockedWhisperers');
    }
}
