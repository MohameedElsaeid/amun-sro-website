        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefShopTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefShop', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->integer('Param1');
            $table->string('Param1_Desc128', 129);
            $table->integer('Param2');
            $table->string('Param2_Desc128', 129);
            $table->integer('Param3');
            $table->string('Param3_Desc128', 129);
            $table->integer('Param4');
            $table->string('Param4_Desc128', 129);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefShop');
            }
        }