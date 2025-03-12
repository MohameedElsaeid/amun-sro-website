<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebShopSROLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('_WebShop_SRO_Log', function (Blueprint $table) {
            $table->bigInteger('ID');
            $table->integer('JID');
            $table->string('IP', 16);
            $table->string('CodeName128', 129);
            $table->decimal('Balance_Before_Buy', 18, 2);
            $table->decimal('Balance_After_Buy', 18, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_WebShop_SRO_Log');
    }
}
