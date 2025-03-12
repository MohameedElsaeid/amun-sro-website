<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShardServiceTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ShardService', function (Blueprint $table) {
            $table->smallInteger('ShardID');
            $table->smallInteger('ServiceType');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ShardService');
    }
}
