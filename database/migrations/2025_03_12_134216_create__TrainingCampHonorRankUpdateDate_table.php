<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCampHonorRankUpdateDateTable extends Migration
{
    public function up(): void
    {
        Schema::create('_TrainingCampHonorRankUpdateDate', function (Blueprint $table) {
            $table->dateTime('LastUpdateDate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_TrainingCampHonorRankUpdateDate');
    }
}
