        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSiegeFortressStoneStateTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_SiegeFortressStoneState', function (Blueprint $table) {
            $table->integer('FortressID');
            $table->integer('GuildID');
            $table->integer('AccumulateDamage');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_SiegeFortressStoneState');
            }
        }