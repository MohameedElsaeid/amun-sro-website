<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOldTable extends Migration
{
    public function up(): void
    {
        Schema::create('_UserOld', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->integer('CharID1');
            $table->integer('CharID2');
            $table->integer('CharID3');
            $table->bigInteger('Gold');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_UserOld');
    }
}
