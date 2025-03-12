        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCharNameListTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CharNameList', function (Blueprint $table) {
            $table->string('CharName16', 17);
            $table->integer('CharID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CharNameList');
            }
        }