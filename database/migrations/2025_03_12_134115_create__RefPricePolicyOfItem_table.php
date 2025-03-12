        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefPricePolicyOfItemTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefPricePolicyOfItem', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->string('RefPackageItemCodeName', 129);
            $table->integer('PaymentDevice');
            $table->integer('PreviousCost');
            $table->integer('Cost');
            $table->integer('Param1');
            $table->string('Param1_Desc128', 129);
            $table->integer('Param2');
            $table->string('Param2_Desc128', 129);
            $table->integer('Param3');
            $table->string('Param3_Desc128', 129)->nullable();
            $table->integer('Param4');
            $table->string('Param4_Desc128', 129);
            $table->integer('index');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefPricePolicyOfItem');
            }
        }