<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientConfigTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ClientConfig', function (Blueprint $table) {
            $table->integer('CharID');
            $table->smallInteger('ConfigType');
            $table->smallInteger('SlotSeq');
            $table->smallInteger('SlotType');
            $table->integer('Data');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ClientConfig');
    }
}
