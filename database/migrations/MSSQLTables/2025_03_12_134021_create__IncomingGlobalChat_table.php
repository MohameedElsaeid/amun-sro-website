<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingGlobalChatTable extends Migration
{
    public function up(): void
    {
        Schema::create('_IncomingGlobalChat', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('CharName', 60);
            $table->text('GlobalChat');
            $table->string('Date', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_IncomingGlobalChat');
    }
}
