<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryForLinkedStorageTable extends Migration
{
    public function up(): void
    {
        Schema::create('_InventoryForLinkedStorage', function (Blueprint $table) {
            $table->bigInteger('LinkedItemID');
            $table->smallInteger('Slot');
            $table->bigInteger('ItemID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_InventoryForLinkedStorage');
    }
}
