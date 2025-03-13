<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKSilkTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_Silk', function (Blueprint $table) {
            $table->integer('JID');
            $table->integer('silk_own');
            $table->integer('silk_gift');
            $table->integer('silk_point');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_Silk');
    }
}
