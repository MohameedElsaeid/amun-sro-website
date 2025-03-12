        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefMappingShopGroupTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefMappingShopGroup', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->string('RefShopGroupCodeName', 129);
            $table->string('RefShopCodeName', 129);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefMappingShopGroup');
            }
        }