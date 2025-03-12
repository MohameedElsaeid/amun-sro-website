        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefShopItemGroupTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefShopItemGroup', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('GroupID');
            $table->string('CodeName128', 129);
            $table->string('StrID128_Group', 129);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefShopItemGroup');
            }
        }