<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabRefRankingRobberActivityTable extends Migration
{
    public function up(): void
    {
        Schema::create('Tab_RefRanking_RobberActivity', function (Blueprint $table) {
            $table->smallInteger('Rank');
            $table->string('NickName', 17);
            $table->smallInteger('JobLevel');
            $table->integer('JobExp');
            $table->smallInteger('Country');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Tab_RefRanking_RobberActivity');
    }
}
