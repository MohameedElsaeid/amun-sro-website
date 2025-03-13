<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefInstanceWorldRegionTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefInstance_World_Region', function (Blueprint $table) {
            $table->integer('WorldID');
            $table->smallInteger('RegionID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefInstance_World_Region');
    }
}
