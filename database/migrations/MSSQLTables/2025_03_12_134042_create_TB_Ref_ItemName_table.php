<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBRefItemNameTable extends Migration
{
    public function up(): void
    {
        Schema::create('TB_Ref_ItemName', function (Blueprint $table) {
            $table->float('ITEM_ID')->nullable();
            $table->float('ITEM_SILK')->nullable();
            $table->string('ITEM_NAME', 255)->nullable();
            $table->string('ITEM_NAME_UK', 255)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('TB_Ref_ItemName');
    }
}
