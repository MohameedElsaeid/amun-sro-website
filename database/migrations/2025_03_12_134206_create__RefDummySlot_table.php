        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDummySlotTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDummySlot', function (Blueprint $table) {
            $table->smallInteger('cnt');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDummySlot');
            }
        }