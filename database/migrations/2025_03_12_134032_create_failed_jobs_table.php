        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateFailedJobsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('uuid', 255);
            $table->string('connection', -1);
            $table->string('queue', -1);
            $table->string('payload', -1);
            $table->string('exception', -1);
            $table->dateTime('failed_at');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('failed_jobs');
            }
        }