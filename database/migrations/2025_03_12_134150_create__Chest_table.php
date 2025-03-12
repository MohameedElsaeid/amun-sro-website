        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateChestTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Chest', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->smallInteger('Slot');
            $table->bigInteger('ItemID')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Chest');
            }
        }