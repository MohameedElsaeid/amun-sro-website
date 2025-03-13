<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefMonsterAssignedItemRndDropTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefMonster_AssignedItemRndDrop', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('RefMonsterID');
            $table->integer('RefItemGroupID');
            $table->string('ItemGroupCodeName128', 128);
            $table->smallInteger('Overlap');
            $table->smallInteger('DropAmountMin');
            $table->smallInteger('DropAmountMax');
            $table->float('DropRatio');
            $table->integer('param1');
            $table->integer('param2');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefMonster_AssignedItemRndDrop');
    }
}
