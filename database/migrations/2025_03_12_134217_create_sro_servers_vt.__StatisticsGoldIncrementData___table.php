<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSroServersVt.StatisticsGoldIncrementDataTable extends Migration
        {
            public
            function up(): void
            {
                Schema::create('sro_servers_vt.__StatisticsGoldIncrementData__', function (Blueprint $table) {
                    $table->dateTime('BeginDate');
                    $table->dateTime('EndDate')->nullable();
                    $table->bigInteger('Paid')->nullable();
                    $table->bigInteger('Income')->nullable();
                    $table->bigInteger('HunterProfit')->nullable();
                });
            }

            public
            function down(): void
            {
                Schema::dropIfExists('sro_servers_vt.__StatisticsGoldIncrementData__');
            }
        }
