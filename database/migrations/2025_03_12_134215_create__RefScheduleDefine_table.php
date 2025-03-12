<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefScheduleDefineTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefScheduleDefine', function (Blueprint $table) {
            $table->integer('ScheduleDefineIdx');
            $table->string('ScheduleName', 124);
            $table->string('Description', 2000)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefScheduleDefine');
    }
}
