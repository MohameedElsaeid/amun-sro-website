        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateOldTrijobTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_OldTrijob', function (Blueprint $table) {
            $table->integer('CharID');
            $table->smallInteger('JobLvl_Trader');
            $table->integer('Trader_Exp');
            $table->smallInteger('JobLvl_Robber');
            $table->integer('Robber_Exp');
            $table->smallInteger('JobLvl_Hunter');
            $table->integer('Hunter_Exp');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_OldTrijob');
            }
        }