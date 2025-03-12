<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipNameTable extends Migration
{
    public function up(): void
    {
        Schema::create('_EquipName', function (Blueprint $table) {
            $table->text('Service')->nullable();
            $table->text('TextString')->nullable();
            $table->text('EndTextString')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_EquipName');
    }
}
