        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefSiegeBlessBuffTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefSiegeBlessBuff', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('BlessID');
            $table->integer('FortressID');
            $table->integer('RefBlessBuffID');
            $table->bigInteger('NeedGold')->nullable();
            $table->integer('NeedGP')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefSiegeBlessBuff');
            }
        }