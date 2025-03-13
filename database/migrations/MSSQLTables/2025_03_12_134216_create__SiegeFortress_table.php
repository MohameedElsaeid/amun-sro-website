<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiegeFortressTable extends Migration
{
    public function up(): void
    {
        Schema::create('_SiegeFortress', function (Blueprint $table) {
            $table->integer('FortressID');
            $table->integer('GuildID');
            $table->smallInteger('TaxRatio');
            $table->bigInteger('Tax');
            $table->smallInteger('NPCHired');
            $table->integer('TempGuildID');
            $table->string('Introduction', 120)->nullable();
            $table->dateTime('CreatedDungeonTime')->nullable();
            $table->smallInteger('CreatedDungeonCount')->nullable();
            $table->smallInteger('IntroductionModificationPermission');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_SiegeFortress');
    }
}
