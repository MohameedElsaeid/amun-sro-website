<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteActionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('vote_actions', function (Blueprint $table) {
            $table->string('Username', 50)->nullable();
            $table->integer('Status')->nullable();
            $table->integer('VoteID')->nullable();
            $table->bigInteger('Date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vote_actions');
    }
}
