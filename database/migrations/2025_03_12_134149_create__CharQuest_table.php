        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCharQuestTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CharQuest', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('QuestID');
            $table->smallInteger('Status');
            $table->smallInteger('AchievementCount');
            $table->dateTime('StartTime');
            $table->dateTime('EndTime');
            $table->bigInteger('QuestData1');
            $table->bigInteger('QuestData2');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CharQuest');
            }
        }