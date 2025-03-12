        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDropClassSelAlchemyTabletTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDropClassSel_Alchemy_Tablet', function (Blueprint $table) {
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
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDropClassSel_Alchemy_Tablet');
            }
        }