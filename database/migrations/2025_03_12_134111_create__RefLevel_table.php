        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefLevelTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefLevel', function (Blueprint $table) {
            $table->smallInteger('Lvl');
            $table->bigInteger('Exp_C');
            $table->integer('Exp_M');
            $table->integer('Cost_M');
            $table->integer('Cost_ST');
            $table->integer('GUST_Mob_Exp');
            $table->integer('JobExp_Trader')->nullable();
            $table->integer('JobExp_Robber')->nullable();
            $table->integer('JobExp_Hunter')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefLevel');
            }
        }