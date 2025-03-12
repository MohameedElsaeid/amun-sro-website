        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSRCharNamesTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SR_CharNames', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->smallInteger('ShardID');
            $table->string('CharID_1', 17);
            $table->string('CharID_2', 17)->nullable();
            $table->string('CharID_3', 17)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SR_CharNames');
            }
        }