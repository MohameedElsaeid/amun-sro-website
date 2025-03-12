        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSKResetSkillLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SK_ResetSkillLog', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('JID')->nullable();
            $table->string('struserid', 20)->nullable();
            $table->string('charname', 20)->nullable();
            $table->string('SkillDown', 20)->nullable();
            $table->string('NewSkill', 50)->nullable();
            $table->string('SilkDown', 20)->nullable();
            $table->string('server', 20)->nullable();
            $table->dateTime('TimeReset')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SK_ResetSkillLog');
            }
        }