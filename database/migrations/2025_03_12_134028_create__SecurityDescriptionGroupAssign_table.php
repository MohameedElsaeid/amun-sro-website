<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecurityDescriptionGroupAssignTable extends Migration
{
    public function up(): void
    {
        Schema::create('_SecurityDescriptionGroupAssign', function (Blueprint $table) {
            $table->smallInteger('nGroupID');
            $table->integer('nDescriptionID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_SecurityDescriptionGroupAssign');
    }
}
