        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateShopItemStockQuantityTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_ShopItemStockQuantity', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->string('RefShopGroupCodeName', 129);
            $table->string('RefPackageItemCodeName', 129);
            $table->smallInteger('ConstStockQuantity');
            $table->smallInteger('StockQuantity');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_ShopItemStockQuantity');
            }
        }