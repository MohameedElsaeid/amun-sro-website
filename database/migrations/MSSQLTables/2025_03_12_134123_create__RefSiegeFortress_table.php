<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSiegeFortressTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSiegeFortress', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('FortressID');
            $table->string('CodeName128', 129);
            $table->string('Name', 129);
            $table->string('NameID128', 129);
            $table->string('LinkedTeleportCodeName', 129);
            $table->smallInteger('Scale');
            $table->smallInteger('MaxAdmission');
            $table->smallInteger('MaxGuard');
            $table->smallInteger('MaxBarricade');
            $table->smallInteger('TaxTargets');
            $table->integer('RequestFee');
            $table->string('CrestPath128', 129);
            $table->string('RequestNPCName128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSiegeFortress');
    }
}
