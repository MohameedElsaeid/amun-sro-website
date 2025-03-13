<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefMagicOptTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefMagicOpt', function (Blueprint $table) {
            $table->integer('Service');
            $table->smallInteger('ID');
            $table->string('MOptName128', 129);
            $table->string('AttrType', 8);
            $table->integer('MLevel');
            $table->float('Prob');
            $table->integer('Weight');
            $table->integer('Param1');
            $table->integer('Param2');
            $table->integer('Param3');
            $table->integer('Param4');
            $table->integer('Param5');
            $table->integer('Param6');
            $table->integer('Param7');
            $table->integer('Param8');
            $table->integer('Param9');
            $table->integer('Param10');
            $table->integer('Param11');
            $table->integer('Param12');
            $table->integer('Param13');
            $table->integer('Param14');
            $table->integer('Param15');
            $table->integer('Param16');
            $table->integer('ExcFunc1');
            $table->integer('ExcFunc2');
            $table->integer('ExcFunc3');
            $table->integer('ExcFunc4');
            $table->integer('ExcFunc5');
            $table->integer('ExcFunc6');
            $table->string('AvailItemGroup1', 129);
            $table->integer('ReqClass1');
            $table->string('AvailItemGroup2', 129);
            $table->integer('ReqClass2');
            $table->string('AvailItemGroup3', 129);
            $table->integer('ReqClass3');
            $table->string('AvailItemGroup4', 129);
            $table->integer('ReqClass4');
            $table->string('AvailItemGroup5', 129);
            $table->integer('ReqClass5');
            $table->string('AvailItemGroup6', 129)->nullable();
            $table->integer('ReqClass6')->nullable();
            $table->string('AvailItemGroup7', 129)->nullable();
            $table->integer('ReqClass7')->nullable();
            $table->string('AvailItemGroup8', 129)->nullable();
            $table->integer('ReqClass8')->nullable();
            $table->string('AvailItemGroup9', 129)->nullable();
            $table->integer('ReqClass9')->nullable();
            $table->string('AvailItemGroup10', 129)->nullable();
            $table->integer('ReqClass10')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefMagicOpt');
    }
}
