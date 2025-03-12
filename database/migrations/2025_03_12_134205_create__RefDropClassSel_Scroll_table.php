        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDropClassSelScrollTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDropClassSel_Scroll', function (Blueprint $table) {
            $table->integer('MonLevel');
            $table->float('ProbGroup1');
            $table->float('ProbGroup2');
            $table->float('ProbGroup3');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDropClassSel_Scroll');
            }
        }