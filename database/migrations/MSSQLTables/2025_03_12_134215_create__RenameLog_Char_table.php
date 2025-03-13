<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenameLogCharTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RenameLog_Char', function (Blueprint $table) {
            $table->integer('ID');
            $table->bigInteger('CharID')->nullable();
            $table->string('OldName', 50)->nullable();
            $table->string('NewName', 50)->nullable();
            $table->dateTime('Time')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RenameLog_Char');
    }
}
