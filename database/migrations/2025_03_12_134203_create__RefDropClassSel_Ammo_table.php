        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDropClassSelAmmoTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDropClassSel_Ammo', function (Blueprint $table) {
            $table->integer('MonLevel');
            $table->float('ProbGroup1');
            $table->float('ProbGroup2');
            $table->float('ProbGroup3');
            $table->float('ProbGroup4');
            $table->float('ProbGroup5');
            $table->float('ProbGroup6');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDropClassSel_Ammo');
            }
        }