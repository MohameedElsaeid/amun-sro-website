        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateInventoryTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Inventory', function (Blueprint $table) {
            $table->integer('CharID');
            $table->smallInteger('Slot');
            $table->bigInteger('ItemID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Inventory');
            }
        }