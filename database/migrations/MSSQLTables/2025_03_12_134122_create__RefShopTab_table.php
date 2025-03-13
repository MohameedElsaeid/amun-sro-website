<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefShopTabTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefShopTab', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('RefTabGroupCodeName', 129);
            $table->string('StrID128_Tab', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefShopTab');
    }
}
