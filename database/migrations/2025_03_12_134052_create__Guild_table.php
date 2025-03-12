<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildTable extends Migration
{
    public function up(): void
    {
        Schema::create('_Guild', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('Name', 64);
            $table->smallInteger('Lvl');
            $table->integer('GatheredSP');
            $table->dateTime('FoundationDate');
            $table->integer('Alliance')->nullable();
            $table->string('MasterCommentTitle', 129)->nullable();
            $table->string('MasterComment', 2049)->nullable();
            $table->integer('Booty')->nullable();
            $table->bigInteger('Gold');
            $table->integer('LastCrestRev');
            $table->integer('CurCrestRev');
            $table->smallInteger('MercenaryAttr');
            $table->integer('ItemPoints');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_Guild');
    }
}
