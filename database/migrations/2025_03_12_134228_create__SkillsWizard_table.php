        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSkillsWizardTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_SkillsWizard', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('SkillID');
            $table->text('SkillName');
            $table->integer('MasteryID')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_SkillsWizard');
            }
        }