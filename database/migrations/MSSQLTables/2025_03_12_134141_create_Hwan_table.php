<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHwanTable extends Migration
{
    public function up(): void
    {
        Schema::create('Hwan', function (Blueprint $table) {
            $table->integer('Hwan_Level');
            $table->text('Title');
            $table->text('Race');
            $table->integer('lvl');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Hwan');
    }
}
