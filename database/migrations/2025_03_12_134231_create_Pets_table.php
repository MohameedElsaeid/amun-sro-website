<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    public function up(): void
    {
        Schema::create('Pets', function (Blueprint $table) {
            $table->integer('ID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Pets');
    }
}
