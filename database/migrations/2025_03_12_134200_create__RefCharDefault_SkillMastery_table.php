<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCharDefaultSkillMasteryTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefCharDefault_SkillMastery', function (Blueprint $table) {
            $table->smallInteger('Race');
            $table->integer('MasteryID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefCharDefault_SkillMastery');
    }
}
