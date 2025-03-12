        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRoyalCoinLogHuntersTable extends Migration
        {
            public function up(): void
            {
                Schema::create('RoyalCoinLogHunters', function (Blueprint $table) {
            $table->integer('CharID')->nullable();
            $table->integer('Amount')->nullable();
            $table->dateTime('EventTime')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('RoyalCoinLogHunters');
            }
        }