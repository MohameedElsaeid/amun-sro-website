<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefitemsBlockTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefitemsBlock', function (Blueprint $table) {
            $table->integer('RefItemID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefitemsBlock');
    }
}
