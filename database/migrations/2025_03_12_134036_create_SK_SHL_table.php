<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKSHLTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_SHL', function (Blueprint $table) {
            $table->integer('idx');
            $table->integer('JID');
            $table->integer('COS');
            $table->integer('CGS');
            $table->integer('HOS');
            $table->integer('HGS');
            $table->dateTime('event_time');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_SHL');
    }
}
