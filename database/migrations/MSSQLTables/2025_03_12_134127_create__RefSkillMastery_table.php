<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSkillMasteryTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSkillMastery', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('Code', 32);
            $table->smallInteger('Weapon');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSkillMastery');
    }
}
