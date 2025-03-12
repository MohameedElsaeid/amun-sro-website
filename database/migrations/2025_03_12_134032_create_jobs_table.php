<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('queue', 255);
            $table->string('payload', -1);
            $table->smallInteger('attempts');
            $table->integer('reserved_at')->nullable();
            $table->integer('available_at');
            $table->integer('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
}
