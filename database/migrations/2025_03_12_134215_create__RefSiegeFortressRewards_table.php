        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefSiegeFortressRewardsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefSiegeFortressRewards', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('FortressID');
            $table->smallInteger('RewardTypeID');
            $table->integer('RewardValue');
            $table->smallInteger('RewardCount');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefSiegeFortressRewards');
            }
        }