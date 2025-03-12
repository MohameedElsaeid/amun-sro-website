        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCasGMChatLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CasGMChatLog', function (Blueprint $table) {
            $table->integer('nSerial');
            $table->string('szGM', 20);
            $table->smallInteger('wShardID');
            $table->string('szCharName', 64);
            $table->integer('nCasSerial');
            $table->string('szGMChatLog', 4000)->nullable();
            $table->dateTime('dWritten');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CasGMChatLog');
            }
        }