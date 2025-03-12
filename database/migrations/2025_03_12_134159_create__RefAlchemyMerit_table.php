        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefAlchemyMeritTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefAlchemyMerit', function (Blueprint $table) {
            $table->integer('Service');
            $table->smallInteger('Group');
            $table->string('OptName128', 129);
            $table->smallInteger('Level');
            $table->float('Weapon');
            $table->float('Armor');
            $table->float('Accessory');
            $table->float('Shield');
            $table->bigInteger('FreeParam1')->nullable();
            $table->string('FreeParamDesc1', 129)->nullable();
            $table->bigInteger('FreeParam2')->nullable();
            $table->string('FreeParamDesc2', 129)->nullable();
            $table->bigInteger('FreeParam3')->nullable();
            $table->string('FreeParamDesc3', 129)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefAlchemyMerit');
            }
        }