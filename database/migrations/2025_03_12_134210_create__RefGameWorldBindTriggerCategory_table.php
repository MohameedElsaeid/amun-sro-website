<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefGameWorldBindTriggerCategoryTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefGameWorldBindTriggerCategory', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('GameWorldID');
            $table->integer('TriggerCategoryID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefGameWorldBindTriggerCategory');
    }
}
