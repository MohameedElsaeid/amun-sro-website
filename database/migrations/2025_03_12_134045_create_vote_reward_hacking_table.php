        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateVoteRewardHackingTable extends Migration
        {
            public function up(): void
            {
                Schema::create('vote_reward_hacking', function (Blueprint $table) {
            $table->string('ip', 50)->nullable();
            $table->string('data', 50)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('vote_reward_hacking');
            }
        }