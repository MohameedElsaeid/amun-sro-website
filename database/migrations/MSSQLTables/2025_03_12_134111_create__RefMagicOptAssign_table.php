<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefMagicOptAssignTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefMagicOptAssign', function (Blueprint $table) {
            $table->integer('Service');
            $table->smallInteger('Race');
            $table->smallInteger('TID3');
            $table->smallInteger('TID4');
            $table->string('AvailMOpt1', 129);
            $table->string('AvailMOpt2', 129);
            $table->string('AvailMOpt3', 129);
            $table->string('AvailMOpt4', 129);
            $table->string('AvailMOpt5', 129);
            $table->string('AvailMOpt6', 129);
            $table->string('AvailMOpt7', 129);
            $table->string('AvailMOpt8', 129);
            $table->string('AvailMOpt9', 129);
            $table->string('AvailMOpt10', 129);
            $table->string('AvailMOpt11', 129);
            $table->string('AvailMOpt12', 129);
            $table->string('AvailMOpt13', 129);
            $table->string('AvailMOpt14', 129);
            $table->string('AvailMOpt15', 129);
            $table->string('AvailMOpt16', 129);
            $table->string('AvailMOpt17', 129);
            $table->string('AvailMOpt18', 129);
            $table->string('AvailMOpt19', 129);
            $table->string('AvailMOpt20', 129);
            $table->string('AvailMOpt21', 129);
            $table->string('AvailMOpt22', 129);
            $table->string('AvailMOpt23', 129);
            $table->string('AvailMOpt24', 129);
            $table->string('AvailMOpt25', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefMagicOptAssign');
    }
}
