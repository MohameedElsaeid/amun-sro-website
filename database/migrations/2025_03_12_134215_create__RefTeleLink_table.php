<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTeleLinkTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefTeleLink', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('OwnerTeleport');
            $table->integer('TargetTeleport');
            $table->integer('Fee');
            $table->smallInteger('RestrictBindMethod');
            $table->smallInteger('RunTimeTeleportMethod');
            $table->smallInteger('CheckResult');
            $table->integer('Restrict1');
            $table->integer('Data1_1')->nullable();
            $table->integer('Data1_2')->nullable();
            $table->integer('Restrict2');
            $table->integer('Data2_1')->nullable();
            $table->integer('Data2_2')->nullable();
            $table->integer('Restrict3');
            $table->integer('Data3_1')->nullable();
            $table->integer('Data3_2')->nullable();
            $table->integer('Restrict4');
            $table->integer('Data4_1')->nullable();
            $table->integer('Data4_2')->nullable();
            $table->integer('Restrict5');
            $table->integer('Data5_1')->nullable();
            $table->integer('Data5_2')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefTeleLink');
    }
}
