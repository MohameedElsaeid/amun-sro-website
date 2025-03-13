<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrcmsSettingsTable extends Migration
{
    public function up(): void
    {
        Schema::create('srcms_settings', function (Blueprint $table) {
            $table->integer('id');
            $table->text('value')->nullable();
            $table->text('valueName')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('srcms_settings');
    }
}
