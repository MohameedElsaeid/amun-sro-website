<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDropItemAssignTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefDropItemAssign', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('RefItemID');
            $table->integer('Prob_Relative');
            $table->integer('Prob_Absolute');
            $table->integer('AssignedGroup');
            $table->integer('DropCount');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefDropItemAssign');
    }
}
