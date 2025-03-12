<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefUIStringMtTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefUIString_Mt', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('GroupCodeName128', 129);
            $table->string('ValueCodeName128', 129);
            $table->string('Value', 513);
            $table->string('Type', 20);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefUIString_Mt');
    }
}
