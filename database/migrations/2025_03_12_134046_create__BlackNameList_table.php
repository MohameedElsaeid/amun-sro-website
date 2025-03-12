        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateBlackNameListTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_BlackNameList', function (Blueprint $table) {
            $table->string('BlacklistName', 255)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_BlackNameList');
            }
        }