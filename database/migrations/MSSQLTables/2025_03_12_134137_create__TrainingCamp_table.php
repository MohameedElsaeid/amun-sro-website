<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCampTable extends Migration
{
    public function up(): void
    {
        Schema::create('_TrainingCamp', function (Blueprint $table) {
            $table->integer('ID');
            $table->dateTime('CreationDate');
            $table->smallInteger('Rank');
            $table->integer('GraduateCount');
            $table->integer('EvaluationPoint');
            $table->dateTime('LatestEvaluationDate');
            $table->string('CommentTitle', 129)->nullable();
            $table->string('Comment', 2048)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_TrainingCamp');
    }
}
