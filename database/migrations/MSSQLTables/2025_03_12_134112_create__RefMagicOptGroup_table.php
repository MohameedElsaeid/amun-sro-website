<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefMagicOptGroupTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefMagicOptGroup', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('LinkID');
            $table->smallInteger('MagicType');
            $table->string('CodeName128', 129);
            $table->integer('MOptID');
            $table->smallInteger('MOptLevel');
            $table->integer('Value');
            $table->integer('Param1');
            $table->string('Param1_Desc', 129);
            $table->integer('Param2');
            $table->string('Param2_Desc', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefMagicOptGroup');
    }
}
