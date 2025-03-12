        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefCharGenTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefCharGen', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('RefObjID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefCharGen');
            }
        }