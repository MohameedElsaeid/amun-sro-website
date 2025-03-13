<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecurityDescriptionGroupTable extends Migration
{
    public function up(): void
    {
        Schema::create('_SecurityDescriptionGroup', function (Blueprint $table) {
            $table->smallInteger('nID');
            $table->string('szName', 32);
            $table->string('szDesc', 256);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_SecurityDescriptionGroup');
    }
}
