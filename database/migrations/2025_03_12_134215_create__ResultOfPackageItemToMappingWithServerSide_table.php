<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultOfPackageItemToMappingWithServerSideTable extends Migration
{
    public function up(): void
    {
        Schema::create('_ResultOfPackageItemToMappingWithServerSide', function (Blueprint $table) {
            $table->smallInteger('Operation');
            $table->integer('CharID');
            $table->integer('Slot');
            $table->bigInteger('RefItemSerial64');
            $table->bigInteger('RefItemDBID');
            $table->integer('RefItemID');
            $table->smallInteger('Type');
            $table->smallInteger('SubType');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_ResultOfPackageItemToMappingWithServerSide');
    }
}
