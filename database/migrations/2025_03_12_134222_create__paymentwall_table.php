<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentwallTable extends Migration
{
    public function up(): void
    {
        Schema::create('_paymentwall', function (Blueprint $table) {
            $table->integer('JID')->nullable();
            $table->integer('credits')->nullable();
            $table->dateTime('date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_paymentwall');
    }
}
