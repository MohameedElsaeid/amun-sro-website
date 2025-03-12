<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefGameWorldGroupTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefGameWorldGroup', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('ObjName128', 129);
            $table->string('ConfigGroupCodeName128', 129);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefGameWorldGroup');
    }
}
