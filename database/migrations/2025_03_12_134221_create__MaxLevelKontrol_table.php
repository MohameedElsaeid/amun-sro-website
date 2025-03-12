<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaxLevelKontrolTable extends Migration
{
    public function up(): void
    {
        Schema::create('_MaxLevelKontrol', function (Blueprint $table) {
            $table->text('CharName')->nullable();
            $table->dateTime('Zaman')->nullable();
            $table->integer('index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_MaxLevelKontrol');
    }
}
