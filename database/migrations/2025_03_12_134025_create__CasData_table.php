        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCasDataTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CasData', function (Blueprint $table) {
            $table->integer('nSerial');
            $table->smallInteger('nCategory');
            $table->dateTime('dReportDate');
            $table->smallInteger('wShardID');
            $table->integer('dwUserJID');
            $table->string('szCharName', 64);
            $table->string('szTgtCharName', 64)->nullable();
            $table->string('szMailAddress', 40);
            $table->string('szStatement', 512);
            $table->smallInteger('nStatus');
            $table->dateTime('dProcessDate')->nullable();
            $table->string('szProcessedGM', 20)->nullable();
            $table->string('szMemo', 128)->nullable();
            $table->string('szAnswer', 1024)->nullable();
            $table->smallInteger('btUserChecked');
            $table->string('szChatLog', 4000);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CasData');
            }
        }