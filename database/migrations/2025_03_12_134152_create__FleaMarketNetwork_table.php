<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleaMarketNetworkTable extends Migration
{
    public function up(): void
    {
        Schema::create('_FleaMarketNetwork', function (Blueprint $table) {
            $table->smallInteger('AbleOpen');
            $table->integer('CharID');
            $table->smallInteger('Slot');
            $table->integer('TidGroupID');
            $table->smallInteger('ItemClass');
            $table->integer('ItemCount');
            $table->smallInteger('MakeZone');
            $table->bigInteger('Cash');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_FleaMarketNetwork');
    }
}
