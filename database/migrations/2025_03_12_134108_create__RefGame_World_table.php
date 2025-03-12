<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefGameWorldTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefGame_World', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('WorldCodeName128', 129);
            $table->smallInteger('Type');
            $table->smallInteger('WorldMaxCount');
            $table->smallInteger('WorldMaxUserCount');
            $table->smallInteger('WorldEntryType');
            $table->smallInteger('WorldEntranceType');
            $table->smallInteger('WorldLeaveType');
            $table->integer('WorldDurationTime');
            $table->integer('WorldEmptyRemainTime');
            $table->string('ConfigGroupCodeName128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefGame_World');
    }
}
