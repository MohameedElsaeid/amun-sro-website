<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKItemSaleLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_ItemSaleLog', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('JID');
            $table->integer('ShardID')->nullable();
            $table->integer('CharID')->nullable();
            $table->integer('ItemID')->nullable();
            $table->integer('Silk_Own');
            $table->integer('Silk_Gift');
            $table->integer('Silk_Point');
            $table->integer('IP')->nullable();
            $table->dateTime('RegDate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_ItemSaleLog');
    }
}
