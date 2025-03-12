        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateKillHistoryTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_KillHistory', function (Blueprint $table) {
            $table->integer('CharId');
            $table->integer('DeathCharId');
            $table->smallInteger('CharLevel');
            $table->smallInteger('DeathCharLevel');
            $table->smallInteger('isJob');
            $table->integer('timestamp');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_KillHistory');
            }
        }