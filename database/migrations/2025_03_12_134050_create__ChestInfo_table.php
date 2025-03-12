        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateChestInfoTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_ChestInfo', function (Blueprint $table) {
            $table->integer('JID');
            $table->smallInteger('ChestSize');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_ChestInfo');
            }
        }