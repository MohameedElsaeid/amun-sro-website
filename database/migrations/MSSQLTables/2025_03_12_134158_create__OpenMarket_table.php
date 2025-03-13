<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenMarketTable extends Migration
{
    public function up(): void
    {
        Schema::create('_OpenMarket', function (Blueprint $table) {
            $table->integer('JID');
            $table->integer('PersnalID');
            $table->string('CharName16', 64);
            $table->smallInteger('Status');
            $table->integer('RefItemID');
            $table->integer('TidGroupID');
            $table->integer('ItemClass');
            $table->bigInteger('ItemID');
            $table->integer('SellCnt');
            $table->dateTime('RegDate');
            $table->dateTime('EndDate');
            $table->bigInteger('Price');
            $table->bigInteger('Deposit');
            $table->bigInteger('SellFee');
            $table->integer('UseCash');
            $table->bigInteger('Serial64');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_OpenMarket');
    }
}
