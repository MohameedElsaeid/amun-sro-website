        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTrainingCampBuffStatusTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_TrainingCampBuffStatus', function (Blueprint $table) {
            $table->integer('CampID');
            $table->integer('RecipientCharID');
            $table->smallInteger('BuffSlotIdx');
            $table->integer('DonorCharID');
            $table->dateTime('StartingTime');
            $table->integer('RemainBuffPoint');
            $table->smallInteger('BuffType');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_TrainingCampBuffStatus');
            }
        }