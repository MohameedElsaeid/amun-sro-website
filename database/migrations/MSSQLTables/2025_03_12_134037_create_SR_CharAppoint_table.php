<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSRCharAppointTable extends Migration
{
    public function up(): void
    {
        Schema::create('SR_CharAppoint', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->integer('ShardID');
            $table->string('CharID', 64);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SR_CharAppoint');
    }
}
