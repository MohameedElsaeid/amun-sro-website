        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateBlockedUserTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_BlockedUser', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->string('UserID', 128);
            $table->smallInteger('Type');
            $table->integer('SerialNo');
            $table->dateTime('timeBegin');
            $table->dateTime('timeEnd');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_BlockedUser');
            }
        }