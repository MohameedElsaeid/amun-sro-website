<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSiegeStructUpgradeTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSiegeStructUpgrade', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->string('Structname', 129);
            $table->string('BaseStructcodename', 129);
            $table->string('UpgradeStructname1', 129);
            $table->string('UpgradeStructname2', 129);
            $table->string('UpgradeStructname3', 129);
            $table->string('UpgradeStructname4', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSiegeStructUpgrade');
    }
}
