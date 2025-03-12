        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSiegeFortressBattleRecordTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_SiegeFortressBattleRecord', function (Blueprint $table) {
            $table->integer('FortressID');
            $table->integer('CharID');
            $table->integer('KillCount');
            $table->integer('KilledCount');
            $table->dateTime('RankUpDate');
            $table->smallInteger('CurRank');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_SiegeFortressBattleRecord');
            }
        }