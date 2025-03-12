        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateUniqueRankingTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_UniqueRanking', function (Blueprint $table) {
            $table->integer('CharID');
            $table->string('CodeName128', 128);
            $table->integer('points');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_UniqueRanking');
            }
        }