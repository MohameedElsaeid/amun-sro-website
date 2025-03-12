        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTrijobRankingStatusTable extends Migration
        {
            public function up(): void
            {
                Schema::create('__TrijobRankingStatus__', function (Blueprint $table) {
            $table->integer('ShardID');
            $table->smallInteger('Status');
            $table->dateTime('UpdateTime');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('__TrijobRankingStatus__');
            }
        }