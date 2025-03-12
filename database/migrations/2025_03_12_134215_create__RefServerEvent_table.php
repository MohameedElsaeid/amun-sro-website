        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefServerEventTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefServerEvent', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->smallInteger('DetectingTargetType');
            $table->integer('DetectingTargetID');
            $table->string('Name', 128);
            $table->dateTime('BeginDate');
            $table->dateTime('EndDate');
            $table->smallInteger('NotificationTypeDetectingTarget');
            $table->smallInteger('AchievementConditionType');
            $table->smallInteger('AchievementConditionLevel');
            $table->integer('AchievementCondition');
            $table->smallInteger('RewardTarget');
            $table->integer('GiveRewardDelayTime');
            $table->smallInteger('ActivateClientUI');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefServerEvent');
            }
        }