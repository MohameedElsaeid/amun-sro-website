<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCampHonorRankTable extends Migration
{
    public function up(): void
    {
        Schema::create('_TrainingCampHonorRank', function (Blueprint $table) {
            $table->integer('Ranking');
            $table->integer('CampID')->nullable();
            $table->smallInteger('Rank')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_TrainingCampHonorRank');
    }
}
