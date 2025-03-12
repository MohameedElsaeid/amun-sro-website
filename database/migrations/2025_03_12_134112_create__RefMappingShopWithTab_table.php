        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefMappingShopWithTabTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefMappingShopWithTab', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->string('RefShopCodeName', 129);
            $table->string('RefTabGroupCodeName', 129);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefMappingShopWithTab');
            }
        }