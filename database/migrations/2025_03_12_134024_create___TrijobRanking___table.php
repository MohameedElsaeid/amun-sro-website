        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTrijobRankingTable extends Migration
        {
            public function up(): void
            {
                Schema::create('__TrijobRanking__', function (Blueprint $table) {
            $table->integer('ShardID');
            $table->smallInteger('TrijobType');
            $table->smallInteger('RankType');
            $table->smallInteger('Rank');
            $table->string('NickName', 64);
            $table->smallInteger('JobLevel');
            $table->integer('JobData');
            $table->smallInteger('IsNewEntry');
            $table->smallInteger('RankDelta');
            $table->smallInteger('Country');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('__TrijobRanking__');
            }
        }