<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemQuotationTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ItemQuotation', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Service');
            $table->integer('AssocNPC');
            $table->integer('RefItemID');
            $table->float('BaseQuot');
            $table->float('Quot_LB');
            $table->float('Quot_UB');
            $table->integer('BaseStockAmount');
            $table->integer('FluctuateAmount');
            $table->integer('CurStockAmount');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ItemQuotation');
    }
}
