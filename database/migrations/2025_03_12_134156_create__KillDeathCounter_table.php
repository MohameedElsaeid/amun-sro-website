        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateKillDeathCounterTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_KillDeathCounter', function (Blueprint $table) {
            $table->integer('CharId')->nullable();
            $table->integer('deaths')->nullable();
            $table->integer('kills')->nullable();
            $table->string('code', 50)->nullable();
            $table->integer('timestamp')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_KillDeathCounter');
            }
        }