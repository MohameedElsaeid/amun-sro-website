        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateAccountJIDTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_AccountJID', function (Blueprint $table) {
            $table->string('AccountID', 128);
            $table->integer('JID');
            $table->bigInteger('Gold');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_AccountJID');
            }
        }