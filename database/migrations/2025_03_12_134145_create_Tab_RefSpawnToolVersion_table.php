<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabRefSpawnToolVersionTable extends Migration
{
    public function up(): void
    {
        Schema::create('Tab_RefSpawnToolVersion', function (Blueprint $table) {
            $table->integer('dwRefDataVersion');
            $table->string('szVersionDescString', 128)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Tab_RefSpawnToolVersion');
    }
}
