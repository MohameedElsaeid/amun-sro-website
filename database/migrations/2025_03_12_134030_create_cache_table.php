        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCacheTable extends Migration
        {
            public function up(): void
            {
                Schema::create('cache', function (Blueprint $table) {
            $table->string('key', 255);
            $table->string('value', -1);
            $table->integer('expiration');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('cache');
            }
        }