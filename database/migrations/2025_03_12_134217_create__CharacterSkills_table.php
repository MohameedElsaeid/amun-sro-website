        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCharacterSkillsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CharacterSkills', function (Blueprint $table) {
            $table->integer('SkillID');
            $table->string('Build', 50);
            $table->string('Race', 50);
            $table->integer('MasteryID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CharacterSkills');
            }
        }