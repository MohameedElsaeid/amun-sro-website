        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTabRefAISkillTable extends Migration
        {
            public function up(): void
            {
                Schema::create('Tab_RefAISkill', function (Blueprint $table) {
            $table->integer('TacticsID');
            $table->string('SkillCodeName', 129);
            $table->smallInteger('ExcuteConditionType');
            $table->integer('ExcuteConditionData')->nullable();
            $table->integer('Option')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('Tab_RefAISkill');
            }
        }