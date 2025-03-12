        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSystemServiceTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SystemService', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Service');
            $table->string('Run', 100);
            $table->string('Type', 100)->nullable();
            $table->string('SystemName', 100);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SystemService');
            }
        }