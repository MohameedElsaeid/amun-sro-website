<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestItemTNETTable extends Migration
{
    public function up(): void
    {
        Schema::create('test_item_TNET', function (Blueprint $table) {
            $table->float('id')->nullable();
            $table->string('CodeName', 255)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_item_TNET');
    }
}
