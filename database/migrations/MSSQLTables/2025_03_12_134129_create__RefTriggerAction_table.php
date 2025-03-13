<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTriggerActionTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTriggerAction', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('RefTriggerCommonID');
            $table->integer('Delay');
            $table->string('ParamGroupCodeName128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTriggerAction');
    }
}
