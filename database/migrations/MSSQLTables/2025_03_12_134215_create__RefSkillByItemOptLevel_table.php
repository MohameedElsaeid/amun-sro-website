<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSkillByItemOptLevelTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSkillByItemOptLevel', function (Blueprint $table) {
            $table->integer('Link');
            $table->integer('RefSkillID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSkillByItemOptLevel');
    }
}
