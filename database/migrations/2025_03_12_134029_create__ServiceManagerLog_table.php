        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateServiceManagerLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_ServiceManagerLog', function (Blueprint $table) {
            $table->integer('nUserID');
            $table->dateTime('EventTime');
            $table->string('szLog', 256);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_ServiceManagerLog');
            }
        }