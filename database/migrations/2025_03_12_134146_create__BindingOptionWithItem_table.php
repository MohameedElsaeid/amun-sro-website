<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBindingOptionWithItemTable extends Migration
{
    public function up(): void
    {
        Schema::create('_BindingOptionWithItem', function (Blueprint $table) {
            $table->bigInteger('nItemDBID');
            $table->smallInteger('bOptType');
            $table->smallInteger('nSlot');
            $table->integer('nOptID');
            $table->smallInteger('nOptLvl');
            $table->integer('nOptValue');
            $table->integer('nParam1')->nullable();
            $table->integer('nParam2')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_BindingOptionWithItem');
    }
}
