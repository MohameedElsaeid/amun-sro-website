<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateILegendToolTable extends Migration
{
    public function up(): void
    {
        Schema::create('iLegend_Tool', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Service');
            $table->string('Type', 50);
            $table->string('Target', 60)->nullable();
            $table->text('Message')->nullable();
            $table->string('RefMobID', 10)->nullable();
            $table->string('RefItemID', 10)->nullable();
            $table->string('Amount', 4)->nullable();
            $table->string('OptLvl', 3)->nullable();
            $table->string('RegionID', 50)->nullable();
            $table->string('PosX', 50)->nullable();
            $table->string('PosY', 50)->nullable();
            $table->string('PosZ', 50)->nullable();
            $table->string('WorldID', 50)->nullable();
            $table->string('CapeColor', 10)->nullable();
            $table->string('StallTitle', 100)->nullable();
            $table->string('StallGreating', 100)->nullable();
            $table->string('StallSlot', 1)->nullable();
            $table->string('InvSlot', 3)->nullable();
            $table->string('ItemCount', 10)->nullable();
            $table->string('ItemPrice', 20)->nullable();
            $table->string('Date', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('iLegend_Tool');
    }
}
