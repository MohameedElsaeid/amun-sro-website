<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up(): void
    {
        Schema::create('_User', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->integer('CharID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_User');
    }
}
