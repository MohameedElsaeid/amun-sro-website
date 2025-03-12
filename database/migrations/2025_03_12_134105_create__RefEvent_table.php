        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefEventTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefEvent', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->string('CodeName', 128);
            $table->string('DescName', 128);
            $table->string('ScheduleName', 128)->nullable();
            $table->integer('ScheduleCount');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefEvent');
            }
        }