<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharCollectionBookTable extends Migration
{
    public function up(): void
    {
        Schema::create('_CharCollectionBook', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('ThemeID');
            $table->integer('SlotIndex');
            $table->dateTime('RegDate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_CharCollectionBook');
    }
}
