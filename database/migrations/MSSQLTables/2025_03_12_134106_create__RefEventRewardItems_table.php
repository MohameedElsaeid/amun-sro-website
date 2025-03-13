<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefEventRewardItemsTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefEventRewardItems', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('EventID');
            $table->string('EventCodeName', 128);
            $table->string('ItemCodeName', 128);
            $table->integer('PayCount');
            $table->float('AchieveRatio');
            $table->string('RentItemCodeName', 128);
            $table->integer('Param1');
            $table->string('Param1_Desc', 128);
            $table->integer('Param2');
            $table->string('Param2_Desc', 128);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefEventRewardItems');
    }
}
