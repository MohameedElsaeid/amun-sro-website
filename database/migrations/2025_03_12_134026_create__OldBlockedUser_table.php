<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOldBlockedUserTable extends Migration
{
    public function up(): void
    {
        Schema::create('_OldBlockedUser', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->smallInteger('Type');
            $table->integer('SerialNo');
            $table->dateTime('timeBegin');
            $table->dateTime('timeEnd');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_OldBlockedUser');
    }
}
