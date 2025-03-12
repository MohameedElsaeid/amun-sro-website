<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunishmentTable extends Migration
{
    public function up(): void
    {
        Schema::create('_Punishment', function (Blueprint $table) {
            $table->integer('SerialNo');
            $table->integer('UserJID');
            $table->smallInteger('Type');
            $table->string('Executor', 128);
            $table->smallInteger('Shard');
            $table->string('CharName', 64)->nullable();
            $table->string('CharInfo', 256);
            $table->string('PosInfo', 64);
            $table->string('Guide', 512);
            $table->string('Description', 1024);
            $table->dateTime('RaiseTime');
            $table->dateTime('BlockStartTime');
            $table->dateTime('BlockEndTime');
            $table->dateTime('PunishTime');
            $table->smallInteger('Status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_Punishment');
    }
}
