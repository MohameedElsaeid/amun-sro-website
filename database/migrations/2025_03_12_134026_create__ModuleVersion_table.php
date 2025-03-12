<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleVersionTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ModuleVersion', function (Blueprint $table) {
            $table->integer('nID');
            $table->smallInteger('nDivisionID');
            $table->smallInteger('nContentID');
            $table->smallInteger('nModuleID');
            $table->integer('nVersion');
            $table->string('szVersion', 64);
            $table->string('szDesc', 256);
            $table->smallInteger('nValid');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ModuleVersion');
    }
}
