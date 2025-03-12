        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefCountryNameAndCodeTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefCountryNameAndCode', function (Blueprint $table) {
            $table->string('code', 2);
            $table->string('szCountryName', 64);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefCountryNameAndCode');
            }
        }