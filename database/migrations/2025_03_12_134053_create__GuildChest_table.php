        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateGuildChestTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_GuildChest', function (Blueprint $table) {
            $table->integer('GuildID');
            $table->smallInteger('Slot');
            $table->bigInteger('ItemID')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_GuildChest');
            }
        }