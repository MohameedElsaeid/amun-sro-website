        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSKPackageItemSaleLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SK_PackageItemSaleLog', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('JID');
            $table->integer('ShardID');
            $table->integer('CharID');
            $table->integer('PackageItemID');
            $table->integer('Silk_Own');
            $table->integer('Silk_Gift');
            $table->integer('Silk_Point');
            $table->integer('IP')->nullable();
            $table->dateTime('RegDate');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SK_PackageItemSaleLog');
            }
        }