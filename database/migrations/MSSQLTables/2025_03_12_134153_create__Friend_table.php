<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendTable extends Migration
{
    public function up(): void
    {
        Schema::create('_Friend', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('FriendCharID');
            $table->string('FriendCharName', 64);
            $table->integer('RefObjID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_Friend');
    }
}
