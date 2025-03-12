        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateVoteRewardAdminsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('vote_reward_admins', function (Blueprint $table) {
            $table->string('name', 50);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('vote_reward_admins');
            }
        }