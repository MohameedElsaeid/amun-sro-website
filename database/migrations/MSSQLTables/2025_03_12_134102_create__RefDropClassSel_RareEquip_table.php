<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDropClassSelRareEquipTable extends Migration
{
    public function up(): void
    {
        Schema::create('_RefDropClassSel_RareEquip', function (Blueprint $table) {
            $table->integer('MonLevel');
            $table->float('ProbGroup1');
            $table->float('ProbGroup2');
            $table->float('ProbGroup3');
            $table->float('ProbGroup4');
            $table->float('ProbGroup5');
            $table->float('ProbGroup6');
            $table->float('ProbGroup7');
            $table->float('ProbGroup8');
            $table->float('ProbGroup9');
            $table->float('ProbGroup10');
            $table->float('ProbGroup11');
            $table->float('ProbGroup12');
            $table->float('ProbGroup13');
            $table->float('ProbGroup14');
            $table->float('ProbGroup15');
            $table->float('ProbGroup16');
            $table->float('ProbGroup17');
            $table->float('ProbGroup18');
            $table->float('ProbGroup19');
            $table->float('ProbGroup20');
            $table->float('ProbGroup21');
            $table->float('ProbGroup22');
            $table->float('ProbGroup23');
            $table->float('ProbGroup24');
            $table->float('ProbGroup25');
            $table->float('ProbGroup26');
            $table->float('ProbGroup27');
            $table->float('ProbGroup28');
            $table->float('ProbGroup29');
            $table->float('ProbGroup30');
            $table->float('ProbGroup31');
            $table->float('ProbGroup32');
            $table->float('ProbGroup33');
            $table->float('ProbGroup34');
            $table->float('ProbGroup35');
            $table->float('ProbGroup36');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_RefDropClassSel_RareEquip');
    }
}
