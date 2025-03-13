<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTriggerEventTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTriggerEvent', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('RefTriggerCommonID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTriggerEvent');
    }
}
