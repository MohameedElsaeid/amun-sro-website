<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKSilkBuyListTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_SilkBuyList', function (Blueprint $table) {
            $table->integer('BuyNo');
            $table->integer('UserJID');
            $table->smallInteger('Silk_Type');
            $table->smallInteger('Silk_Reason');
            $table->integer('Silk_Offset');
            $table->integer('Silk_Remain');
            $table->integer('ID');
            $table->integer('BuyQuantity');
            $table->string('OrderNumber', 30);
            $table->smallInteger('PGCompany')->nullable();
            $table->smallInteger('PayMethod')->nullable();
            $table->string('PGUniqueNo', 20)->nullable();
            $table->string('AuthNumber', 14)->nullable();
            $table->dateTime('AuthDate')->nullable();
            $table->integer('SubJID')->nullable();
            $table->string('srID', 25)->nullable();
            $table->string('SlipPaper', 128);
            $table->integer('MngID')->nullable();
            $table->string('IP', 16)->nullable();
            $table->dateTime('RegDate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_SilkBuyList');
    }
}
