        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCharTrijobSafeTradeTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CharTrijobSafeTrade', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('AbleCount');
            $table->integer('Status');
            $table->dateTime('LastSafeTrade');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CharTrijobSafeTrade');
            }
        }