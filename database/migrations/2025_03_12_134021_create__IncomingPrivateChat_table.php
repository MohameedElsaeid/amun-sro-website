        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateIncomingPrivateChatTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_IncomingPrivateChat', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('CharName', 60);
            $table->text('Chat');
            $table->string('Date', 100);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_IncomingPrivateChat');
            }
        }