<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCampMemberTable extends Migration
{
    public function up(): void
    {
        Schema::create('_TrainingCampMember', function (Blueprint $table) {
            $table->integer('CampID');
            $table->integer('CharID');
            $table->integer('RefObjID');
            $table->string('CharName', 64);
            $table->dateTime('JoinDate');
            $table->smallInteger('MemberClass');
            $table->smallInteger('CharJoinedLevel');
            $table->smallInteger('CharCurLevel');
            $table->smallInteger('CharMaxLevel');
            $table->integer('HonorPoint');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_TrainingCampMember');
    }
}
