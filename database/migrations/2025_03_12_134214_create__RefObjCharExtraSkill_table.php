        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefObjCharExtraSkillTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefObjCharExtraSkill', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('CharID');
            $table->integer('ExtraSkill_1')->nullable();
            $table->integer('ExtraSkill_2')->nullable();
            $table->integer('ExtraSkill_3')->nullable();
            $table->integer('ExtraSkill_4')->nullable();
            $table->integer('ExtraSkill_5')->nullable();
            $table->integer('ExtraSkill_6')->nullable();
            $table->integer('ExtraSkill_7')->nullable();
            $table->integer('ExtraSkill_8')->nullable();
            $table->integer('ExtraSkill_9')->nullable();
            $table->integer('ExtraSkill_10')->nullable();
            $table->integer('ExtraSkill_11')->nullable();
            $table->integer('ExtraSkill_12')->nullable();
            $table->integer('ExtraSkill_13')->nullable();
            $table->integer('ExtraSkill_14')->nullable();
            $table->integer('ExtraSkill_15')->nullable();
            $table->integer('ExtraSkill_16')->nullable();
            $table->integer('ExtraSkill_17')->nullable();
            $table->integer('ExtraSkill_18')->nullable();
            $table->integer('ExtraSkill_19')->nullable();
            $table->integer('ExtraSkill_20')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefObjCharExtraSkill');
            }
        }