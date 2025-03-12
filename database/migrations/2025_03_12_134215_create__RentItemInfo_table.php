<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentItemInfoTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RentItemInfo', function (Blueprint $table) {
            $table->bigInteger('nItemDBID');
            $table->integer('nRentType');
            $table->smallInteger('nCanDelete');
            $table->smallInteger('nCanRecharge');
            $table->dateTime('PeriodBeginTime');
            $table->dateTime('PeriodEndTime');
            $table->dateTime('MeterRateTime')->nullable();
            $table->smallInteger('nPackingState')->nullable();
            $table->integer('nPackingTime')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RentItemInfo');
    }
}
