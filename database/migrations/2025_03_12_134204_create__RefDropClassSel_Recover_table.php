        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDropClassSelRecoverTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDropClassSel_Recover', function (Blueprint $table) {
            $table->integer('MonLevel');
            $table->float('ProbGroup1');
            $table->float('ProbGroup2');
            $table->float('ProbGroup3');
            $table->float('ProbGroup4');
            $table->float('ProbGroup5');
            $table->float('ProbGroup6');
            $table->float('ProbGroup7');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDropClassSel_Recover');
            }
        }