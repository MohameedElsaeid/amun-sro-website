<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharTrijobTable extends Migration
{
    public function up(): void
    {
        Schema::create('_CharTrijob', function (Blueprint $table) {
            $table->integer('CharID');
            $table->smallInteger('JobType');
            $table->smallInteger('Level');
            $table->integer('Exp');
            $table->integer('Contribution');
            $table->integer('Reward');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_CharTrijob');
    }
}
