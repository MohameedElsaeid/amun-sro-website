<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvCOSTable extends Migration
{
    public function up(): void
    {
        Schema::create('_InvCOS', function (Blueprint $table) {
            $table->integer('COSID');
            $table->smallInteger('Slot');
            $table->bigInteger('ItemID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_InvCOS');
    }
}
