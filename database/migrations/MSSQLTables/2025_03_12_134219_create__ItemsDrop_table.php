<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsDropTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ItemsDrop', function (Blueprint $table) {
            $table->integer('CharID')->nullable();
            $table->bigInteger('Serial64')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ItemsDrop');
    }
}
