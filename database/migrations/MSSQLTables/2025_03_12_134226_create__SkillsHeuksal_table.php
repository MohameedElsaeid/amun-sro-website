<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsHeuksalTable extends Migration
{
    public function up(): void
    {
        Schema::create('_SkillsHeuksal', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('SkillID');
            $table->text('SkillName');
            $table->integer('MasteryID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_SkillsHeuksal');
    }
}
