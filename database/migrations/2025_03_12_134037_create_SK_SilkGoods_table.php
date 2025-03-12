<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKSilkGoodsTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_SilkGoods', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->string('GoodsCode', 10);
            $table->string('GoodsName', 32);
            $table->integer('SilkQuantity');
            $table->integer('PointQuantity');
            $table->integer('SilkPrice');
            $table->smallInteger('Category');
            $table->string('CPName', 36);
            $table->dateTime('RegDate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_SilkGoods');
    }
}
