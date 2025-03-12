<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSiegeFortressGuardTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefSiegeFortressGuard', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('FortressID');
            $table->integer('GuardRefObjID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefSiegeFortressGuard');
    }
}
