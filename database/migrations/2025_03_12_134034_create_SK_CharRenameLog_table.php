        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSKCharRenameLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SK_CharRenameLog', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('JID')->nullable();
            $table->string('struserid', 50)->nullable();
            $table->string('old_char', 20)->nullable();
            $table->string('new_char', 20)->nullable();
            $table->string('server', 20)->nullable();
            $table->dateTime('timechange')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SK_CharRenameLog');
            }
        }