<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCollectionBookThemeTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefCollectionBook_Theme', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('ObjName128', 129);
            $table->string('Name128', 129);
            $table->string('Desc128', 129);
            $table->integer('CompleteNum');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefCollectionBook_Theme');
    }
}
