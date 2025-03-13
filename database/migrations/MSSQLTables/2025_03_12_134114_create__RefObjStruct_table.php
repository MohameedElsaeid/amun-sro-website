<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefObjStructTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefObjStruct', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Dummy_Data');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefObjStruct');
    }
}
