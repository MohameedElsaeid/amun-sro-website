<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharSkillTable extends Migration
{
    public function up(): void
    {
        Schema::create('_CharSkill', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('SkillID');
            $table->smallInteger('Enable');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_CharSkill');
    }
}
