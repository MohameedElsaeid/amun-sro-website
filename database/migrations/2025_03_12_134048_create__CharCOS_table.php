<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharCOSTable extends Migration
{
    public function up(): void
    {
        Schema::create('_CharCOS', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('OwnerCharID');
            $table->integer('RefCharID');
            $table->integer('HP');
            $table->integer('MP');
            $table->integer('KeeperNPC');
            $table->smallInteger('State');
            $table->string('CharName', 16)->nullable();
            $table->smallInteger('Lvl');
            $table->bigInteger('ExpOffset');
            $table->smallInteger('HGP');
            $table->integer('PetOption');
            $table->dateTime('RentEndTime')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_CharCOS');
    }
}
