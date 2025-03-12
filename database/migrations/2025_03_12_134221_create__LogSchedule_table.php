        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateLogScheduleTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_LogSchedule', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('ServerType', 124);
            $table->integer('ServerBodyID');
            $table->string('ScheduleDefine', 124);
            $table->integer('ScheduleIdx');
            $table->string('Type', 10);
            $table->dateTime('OccureTime');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_LogSchedule');
            }
        }