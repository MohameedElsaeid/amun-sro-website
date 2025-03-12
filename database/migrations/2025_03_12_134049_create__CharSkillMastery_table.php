<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharSkillMasteryTable extends Migration
{
    public function up(): void
    {
        Schema::create('_CharSkillMastery', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('MasteryID');
            $table->smallInteger('Level');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_CharSkillMastery');
    }
}
