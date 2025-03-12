<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomPcLimitTable extends Migration
{
    public function up(): void
    {
        Schema::create('CustomPcLimit', function (Blueprint $table) {
            $table->integer('RegionID');
            $table->integer('IPCount');
            $table->integer('HWIDCount')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CustomPcLimit');
    }
}
