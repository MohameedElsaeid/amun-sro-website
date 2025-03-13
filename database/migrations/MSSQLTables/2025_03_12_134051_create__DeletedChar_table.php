<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeletedCharTable extends Migration
{
    public function up(): void
    {
        Schema::create('_DeletedChar', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('UserJID');
            $table->dateTime('DeletedDate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_DeletedChar');
    }
}
