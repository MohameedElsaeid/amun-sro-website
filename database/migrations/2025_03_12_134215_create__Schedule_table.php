<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    public function up(): void
    {
        Schema::create('_Schedule', function (Blueprint $table) {
            $table->integer('ScheduleIdx');
            $table->integer('ScheduleDefineIdx');
            $table->dateTime('DateStart');
            $table->dateTime('DateEnd');
            $table->integer('MainInterval_Type');
            $table->integer('MainInterval_TypeDate');
            $table->smallInteger('SubInterval_DayOfWeek')->nullable();
            $table->smallInteger('SubInterval_Days')->nullable();
            $table->smallInteger('SubInterval_Weeks')->nullable();
            $table->smallInteger('SubInterval_Months')->nullable();
            $table->smallInteger('SubInterval_StartTimeHour')->nullable();
            $table->smallInteger('SubInterval_StartTimeMinute')->nullable();
            $table->smallInteger('SubInterval_StartTimeSecond')->nullable();
            $table->integer('SubInterval_DurationSecond')->nullable();
            $table->integer('SubInterval_RepititionTerm')->nullable();
            $table->integer('SubInterval_MaintainTime')->nullable();
            $table->string('Param', 256)->nullable();
            $table->string('Description', 2000)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_Schedule');
    }
}
