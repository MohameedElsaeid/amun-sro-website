<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTop100Table extends Migration
{
    public function up(): void
    {
        Schema::create('_Top100', function (Blueprint $table) {
            $table->integer('CharID')->nullable();
            $table->smallInteger('Data2')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_Top100');
    }
}
