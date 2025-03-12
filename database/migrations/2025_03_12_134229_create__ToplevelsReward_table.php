        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateToplevelsRewardTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_ToplevelsReward', function (Blueprint $table) {
            $table->smallInteger('Silk1')->nullable();
            $table->smallInteger('Silk2')->nullable();
            $table->smallInteger('Silk3')->nullable();
            $table->string('Reward1Top100', 50)->nullable();
            $table->smallInteger('Reward1Count100')->nullable();
            $table->string('Reward2Top100', 50)->nullable();
            $table->smallInteger('Reward2Count100')->nullable();
            $table->string('Reward3Top100', 50)->nullable();
            $table->smallInteger('Reward3Count100')->nullable();
            $table->string('Reward1Top200', 50)->nullable();
            $table->smallInteger('Reward1Count200')->nullable();
            $table->string('Reward2Top200', 50)->nullable();
            $table->smallInteger('Reward2Count200')->nullable();
            $table->string('Reward3Top200', 50)->nullable();
            $table->smallInteger('Reward3Count200')->nullable();
            $table->string('Reward1Top300', 50)->nullable();
            $table->smallInteger('Reward1Count300')->nullable();
            $table->string('Reward2Top300', 50)->nullable();
            $table->smallInteger('Reward2Count300')->nullable();
            $table->string('Reward3Top300', 50)->nullable();
            $table->smallInteger('Reward3Count300')->nullable();
            $table->string('RewardMale', 50)->nullable();
            $table->smallInteger('RewardMaleCount')->nullable();
            $table->string('RewardFemale', 50)->nullable();
            $table->smallInteger('RewardFemaleCount')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_ToplevelsReward');
            }
        }