<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharIDTable extends Migration
{
    public function up(): void
    {
        Schema::create('CharID', function (Blueprint $table) {
            $table->integer('ID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CharID');
    }
}
