        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSrcmsEpinTable extends Migration
        {
            public function up(): void
            {
                Schema::create('srcms_epin', function (Blueprint $table) {
            $table->integer('id');
            $table->bigInteger('code')->nullable();
            $table->integer('silkAmount')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('srcms_epin');
            }
        }