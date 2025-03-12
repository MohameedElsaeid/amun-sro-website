<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrZorGlobalChatLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('srZor_globalChatLog', function (Blueprint $table) {
            $table->integer('id');
            $table->string('sender', 50)->nullable();
            $table->string('msg', 300)->nullable();
            $table->dateTime('time')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('srZor_globalChatLog');
    }
}
