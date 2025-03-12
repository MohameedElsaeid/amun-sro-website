<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniqueInfoTable extends Migration
{
    public function up(): void
    {
        Schema::create('_UniqueInfo', function (Blueprint $table) {
            $table->string('CodeName128', 128);
            $table->string('Name', 128);
            $table->integer('Point');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_UniqueInfo');
    }
}
