<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefShopObjectTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefShopObject', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('CodeName128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefShopObject');
    }
}
