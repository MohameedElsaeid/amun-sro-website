<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrcmsNewsTable extends Migration
{
    public function up(): void
    {
        Schema::create('srcms_news', function (Blueprint $table) {
            $table->integer('id');
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->text('author')->nullable();
            $table->text('time')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('srcms_news');
    }
}
