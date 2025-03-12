<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlliedClansTable extends Migration
{
    public function up(): void
    {
        Schema::create('_AlliedClans', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Ally1')->nullable();
            $table->integer('Ally2')->nullable();
            $table->integer('Ally3')->nullable();
            $table->integer('Ally4')->nullable();
            $table->integer('Ally5')->nullable();
            $table->integer('Ally6')->nullable();
            $table->integer('Ally7')->nullable();
            $table->integer('Ally8')->nullable();
            $table->dateTime('FoundationDate');
            $table->integer('LastCrestRev');
            $table->integer('CurCrestRev');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_AlliedClans');
    }
}
