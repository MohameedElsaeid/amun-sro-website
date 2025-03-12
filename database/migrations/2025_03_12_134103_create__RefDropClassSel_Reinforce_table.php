<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDropClassSelReinforceTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefDropClassSel_Reinforce', function (Blueprint $table) {
            $table->integer('MonLevel');
            $table->float('ProbGroup1');
            $table->float('ProbGroup2');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefDropClassSel_Reinforce');
    }
}
