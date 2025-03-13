<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtpropertiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('dtproperties', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('objectid')->nullable();
            $table->string('property', 64);
            $table->string('value', 255)->nullable();
            $table->string('uvalue', 255)->nullable();
            $table->binary('lvalue')->nullable();
            $table->integer('version');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dtproperties');
    }
}
