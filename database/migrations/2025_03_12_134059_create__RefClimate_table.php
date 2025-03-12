        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefClimateTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefClimate', function (Blueprint $table) {
            $table->integer('ID');
            $table->smallInteger('InitialWeather');
            $table->smallInteger('InitialAmount');
            $table->smallInteger('ChangeWeather');
            $table->smallInteger('Division');
            $table->integer('Duration');
            $table->integer('DurationVariance');
            $table->smallInteger('Snowfall');
            $table->smallInteger('SnowfallVariance');
            $table->smallInteger('ProbSnow');
            $table->smallInteger('Rainfall');
            $table->smallInteger('RainfallVariance');
            $table->smallInteger('ProbRain');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefClimate');
            }
        }