<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteIpTable extends Migration
{
    public function up(): void
    {
        Schema::create('vote_ip', function (Blueprint $table) {
            $table->string('IP', 50)->nullable();
            $table->string('LastDate', 50)->nullable();
            $table->integer('VoteID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vote_ip');
    }
}
