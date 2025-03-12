        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSKITEMGuardLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SK_ITEM_GuardLog', function (Blueprint $table) {
            $table->integer('autoID');
            $table->bigInteger('serial64')->nullable();
            $table->integer('gremain')->nullable();
            $table->integer('shardID')->nullable();
            $table->integer('optionLvl')->nullable();
            $table->dateTime('LastGuard')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SK_ITEM_GuardLog');
            }
        }