<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSkillGroupTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSkillGroup', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('Code', 128);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSkillGroup');
    }
}
