<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationTable extends Migration
{
    public function up(): void
    {
        Schema::create('_Donation', function (Blueprint $table) {
            $table->string('TransactionID', 128);
            $table->integer('OfferID');
            $table->string('TransactionSignature', 128);
            $table->string('TransactionType', 64);
            $table->integer('UserJID');
            $table->string('Username', 64);
            $table->integer('Silk');
            $table->integer('Total')->nullable();
            $table->dateTime('Date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_Donation');
    }
}
