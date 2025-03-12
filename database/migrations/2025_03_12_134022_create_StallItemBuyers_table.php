<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStallItemBuyersTable extends Migration
{
    public function up(): void
    {
        Schema::create('StallItemBuyers', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('BuyerName', 50);
            $table->integer('StallSlot');
            $table->string('Date', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('StallItemBuyers');
    }
}
