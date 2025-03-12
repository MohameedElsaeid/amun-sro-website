        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSrcmsPrivatemessagesTable extends Migration
        {
            public function up(): void
            {
                Schema::create('srcms_privatemessages', function (Blueprint $table) {
            $table->integer('id');
            $table->bigInteger('sender')->nullable();
            $table->bigInteger('receiver')->nullable();
            $table->string('title', 50)->nullable();
            $table->string('msg', 500)->nullable();
            $table->smallInteger('viewed')->nullable();
            $table->dateTime('time')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('srcms_privatemessages');
            }
        }