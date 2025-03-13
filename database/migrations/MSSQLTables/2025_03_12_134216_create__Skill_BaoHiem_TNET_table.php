<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillBaoHiemTNETTable extends Migration
{
    public function up(): void
    {
        Schema::create('_Skill_BaoHiem_TNET', function (Blueprint $table) {
            $table->integer('CharID');
            $table->string('CharName', 20)->nullable();
            $table->integer('SkillBaoHiem')->nullable();
            $table->dateTime('Regdate')->nullable();
            $table->dateTime('LastModified')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_Skill_BaoHiem_TNET');
    }
}
