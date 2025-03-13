<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecurityDescriptionTable extends Migration
{
    public function up(): void
    {
        Schema::create('_SecurityDescription', function (Blueprint $table) {
            $table->integer('nID');
            $table->string('szName', 64);
            $table->string('szDesc', 256);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_SecurityDescription');
    }
}
