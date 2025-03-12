<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoyalItemPoolAutoEquipmentTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RoyalItemPoolAutoEquipment', function (Blueprint $table) {
            $table->integer('service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->smallInteger('TypeID1');
            $table->smallInteger('TypeID2');
            $table->smallInteger('TypeID3');
            $table->smallInteger('TypeID4');
            $table->smallInteger('ReqLevel1');
            $table->smallInteger('Gender')->nullable();
            $table->bigInteger('P1')->nullable();
            $table->bigInteger('P2')->nullable();
            $table->bigInteger('P3')->nullable();
            $table->bigInteger('P4')->nullable();
            $table->bigInteger('P5')->nullable();
            $table->bigInteger('P6')->nullable();
            $table->bigInteger('P7')->nullable();
            $table->bigInteger('P8')->nullable();
            $table->bigInteger('P9')->nullable();
            $table->smallInteger('MagParamNum')->nullable();
            $table->bigInteger('Va')->nullable();
            $table->boolean('Race')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RoyalItemPoolAutoEquipment');
    }
}
