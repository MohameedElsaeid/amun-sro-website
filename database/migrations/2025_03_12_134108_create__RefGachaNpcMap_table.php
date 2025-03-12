<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefGachaNpcMapTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefGachaNpcMap', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('NPC_ID');
            $table->integer('SelectionGachaID');
            $table->integer('WasteGachaID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefGachaNpcMap');
    }
}
