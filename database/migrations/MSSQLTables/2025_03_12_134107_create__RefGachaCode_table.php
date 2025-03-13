<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefGachaCodeTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefGachaCode', function (Blueprint $table) {
            $table->string('CodeName128', 129);
            $table->integer('GachaSetID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefGachaCode');
    }
}
