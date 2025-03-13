<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefShopItemStockPeriodTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefShopItemStockPeriod', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->integer('ID');
            $table->string('RefShopGroupCodeName', 129);
            $table->string('RefPackageItemCodeName', 129);
            $table->dateTime('StockOpeningDate');
            $table->dateTime('StockExpireDate');
            $table->smallInteger('PeriodDevice');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefShopItemStockPeriod');
    }
}
