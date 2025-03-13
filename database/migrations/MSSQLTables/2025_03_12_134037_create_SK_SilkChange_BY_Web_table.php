<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKSilkChangeBYWebTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_SilkChange_BY_Web', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('JID');
            $table->integer('silk_remain');
            $table->integer('silk_offset');
            $table->smallInteger('silk_type');
            $table->smallInteger('reason');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_SilkChange_BY_Web');
    }
}
