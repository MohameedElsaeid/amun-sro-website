        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateVoteRewardConfigTable extends Migration
        {
            public function up(): void
            {
                Schema::create('vote_reward_config', function (Blueprint $table) {
            $table->string('web_title', 25)->nullable();
            $table->string('vote_time', 50)->nullable();
            $table->string('url_top1', 50)->nullable();
            $table->string('url_top2', 50)->nullable();
            $table->string('reward', 50)->nullable();
            $table->string('language', 50)->nullable();
            $table->string('uniqueid', 50)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('vote_reward_config');
            }
        }