        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateEventWinnersTable extends Migration
        {
            public function up(): void
            {
                Schema::create('EventWinners', function (Blueprint $table) {
            $table->string('CharId', 100)->nullable();
            $table->string('EventName', 50)->nullable();
            $table->integer('Wins')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('EventWinners');
            }
        }