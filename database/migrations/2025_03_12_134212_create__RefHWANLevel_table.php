        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefHWANLevelTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefHWANLevel', function (Blueprint $table) {
            $table->smallInteger('HwanLevel');
            $table->integer('ParamFourcc1')->nullable();
            $table->smallInteger('ParamValue1')->nullable();
            $table->integer('ParamFourcc2')->nullable();
            $table->smallInteger('ParamValue2')->nullable();
            $table->integer('ParamFourcc3')->nullable();
            $table->smallInteger('ParamValue3')->nullable();
            $table->integer('ParamFourcc4')->nullable();
            $table->smallInteger('ParamValue4')->nullable();
            $table->integer('ParamFourcc5')->nullable();
            $table->smallInteger('ParamValue5')->nullable();
            $table->string('AssocFileObj128', 129)->nullable();
            $table->string('Title_CH70', 70)->nullable();
            $table->string('Title_EU70', 70)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefHWANLevel');
            }
        }