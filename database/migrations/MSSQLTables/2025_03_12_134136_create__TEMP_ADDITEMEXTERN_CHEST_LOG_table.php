<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTEMPADDITEMEXTERNCHESTLOGTable extends Migration
{
    public function up(): void
    {
        Schema::create('_TEMP_ADDITEMEXTERN_CHEST_LOG', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('LogString', 256)->nullable();
            $table->dateTime('LogDate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_TEMP_ADDITEMEXTERN_CHEST_LOG');
    }
}
