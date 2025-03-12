        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateItemQuayTNETTable extends Migration
        {
            public function up(): void
            {
                Schema::create('Item_Quay_TNET', function (Blueprint $table) {
            $table->string('CodeName', 255)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('Item_Quay_TNET');
            }
        }