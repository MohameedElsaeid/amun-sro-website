<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKGamebangIpTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_gamebang_ip', function (Blueprint $table) {
            $table->smallInteger('nID');
            $table->integer('ip');
            $table->smallInteger('capacity');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_gamebang_ip');
    }
}
