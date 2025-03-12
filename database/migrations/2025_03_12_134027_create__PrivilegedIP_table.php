<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegedIPTable extends Migration
{
    public function up(): void
    {
        Schema::create('_PrivilegedIP', function (Blueprint $table) {
            $table->smallInteger('IP1');
            $table->smallInteger('IP2');
            $table->smallInteger('IP3');
            $table->smallInteger('IP4');
            $table->smallInteger('IP5');
            $table->smallInteger('IP6');
            $table->smallInteger('IP7');
            $table->smallInteger('IP8');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_PrivilegedIP');
    }
}
