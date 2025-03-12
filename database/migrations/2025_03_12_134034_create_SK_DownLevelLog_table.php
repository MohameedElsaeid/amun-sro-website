        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSKDownLevelLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SK_DownLevelLog', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('JID')->nullable();
            $table->string('struserid', 20)->nullable();
            $table->string('charname', 20)->nullable();
            $table->string('package', 50)->nullable();
            $table->string('newlevel', 10)->nullable();
            $table->string('server', 20)->nullable();
            $table->dateTime('timedown')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SK_DownLevelLog');
            }
        }