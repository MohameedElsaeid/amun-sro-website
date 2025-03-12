        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSrcmsRefferalsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('srcms_refferals', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('reffererJID')->nullable();
            $table->integer('invitedUserJID')->nullable();
            $table->string('time', 100)->nullable();
            $table->string('ip', 100)->nullable();
            $table->smallInteger('bonusAdded')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('srcms_refferals');
            }
        }