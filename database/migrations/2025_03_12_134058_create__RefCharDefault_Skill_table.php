<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCharDefaultSkillTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefCharDefault_Skill', function (Blueprint $table) {
            $table->smallInteger('Race');
            $table->integer('SkillID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefCharDefault_Skill');
    }
}
