<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCharDefaultQuestTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefCharDefault_Quest', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->smallInteger('Race');
            $table->string('CodeName', 128);
            $table->smallInteger('RequiredLevel');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefCharDefault_Quest');
    }
}
