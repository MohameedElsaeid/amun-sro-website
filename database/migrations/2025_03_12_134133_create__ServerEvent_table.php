<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerEventTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ServerEvent', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('CompletionValue');
            $table->integer('AchievementCondition');
            $table->integer('ProgressCount');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ServerEvent');
    }
}
