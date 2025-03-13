<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTeleportTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTeleport', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('AssocRefObjCodeName128', 129)->nullable();
            $table->integer('AssocRefObjID');
            $table->string('ZoneName128', 129);
            $table->smallInteger('GenRegionID');
            $table->smallInteger('GenPos_X');
            $table->smallInteger('GenPos_Y');
            $table->smallInteger('GenPos_Z');
            $table->smallInteger('GenAreaRadius');
            $table->smallInteger('CanBeResurrectPos');
            $table->smallInteger('CanGotoResurrectPos');
            $table->smallInteger('GenWorldID');
            $table->smallInteger('BindInteractionMask');
            $table->smallInteger('FixedService');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTeleport');
    }
}
