        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateItemPoolTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_ItemPool', function (Blueprint $table) {
            $table->bigInteger('ItemID');
            $table->smallInteger('InUse');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_ItemPool');
            }
        }