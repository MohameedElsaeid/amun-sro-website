<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefQuestTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefQuest', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->string('CodeName', 128);
            $table->smallInteger('Level');
            $table->string('DescName', 128);
            $table->string('NameString', 128);
            $table->string('PayString', 128);
            $table->string('ContentsString', 128);
            $table->string('PayContents', 128);
            $table->string('NoticeNPC', 128);
            $table->string('NoticeCondition', 128);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefQuest');
    }
}
