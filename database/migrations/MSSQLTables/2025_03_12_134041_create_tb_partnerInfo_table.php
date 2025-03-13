<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPartnerInfoTable extends Migration
{
    public function up(): void
    {
        Schema::create('tb_partnerInfo', function (Blueprint $table) {
            $table->string('partnerID', 10);
            $table->string('partnerName', 20)->nullable();
            $table->string('partnerPass', 10)->nullable();
            $table->integer('balance')->nullable();
            $table->dateTime('udate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_partnerInfo');
    }
}
