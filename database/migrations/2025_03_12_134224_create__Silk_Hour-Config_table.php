        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSilk/HourConfigTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Silk/Hour-Config', function (Blueprint $table) {
            $table->text('Desc')->nullable();
            $table->integer('DefaultSilk');
            $table->integer('Step1Silk');
            $table->integer('Step2Silk');
            $table->integer('Step3Silk');
            $table->integer('RewardSilk');
            $table->string('WEEKDAYS', 15)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Silk/Hour-Config');
            }
        }