        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSessionsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('sessions', function (Blueprint $table) {
            $table->string('id', 255);
            $table->bigInteger('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', -1)->nullable();
            $table->string('payload', -1);
            $table->integer('last_activity');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('sessions');
            }
        }