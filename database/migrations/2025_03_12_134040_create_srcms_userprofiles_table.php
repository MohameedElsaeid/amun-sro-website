<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrcmsUserprofilesTable extends Migration
{
    public function up(): void
    {
        Schema::create('srcms_userprofiles', function (Blueprint $table) {
            $table->bigInteger('JID');
            $table->smallInteger('gender')->nullable();
            $table->string('skype', 50)->nullable();
            $table->string('msn', 60)->nullable();
            $table->string('avatar', 500)->nullable();
            $table->text('whois')->nullable();
            $table->smallInteger('ispublic')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('srcms_userprofiles');
    }
}
