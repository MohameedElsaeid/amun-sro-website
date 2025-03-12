        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefScrapOfPackageItemTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefScrapOfPackageItem', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->string('RefPackageItemCodeName', 129);
            $table->string('RefItemCodeName', 129);
            $table->smallInteger('OptLevel');
            $table->bigInteger('Variance');
            $table->integer('Data');
            $table->smallInteger('MagParamNum');
            $table->bigInteger('MagParam1');
            $table->bigInteger('MagParam2');
            $table->bigInteger('MagParam3');
            $table->bigInteger('MagParam4');
            $table->bigInteger('MagParam5');
            $table->bigInteger('MagParam6');
            $table->bigInteger('MagParam7');
            $table->bigInteger('MagParam8');
            $table->bigInteger('MagParam9');
            $table->bigInteger('MagParam10');
            $table->bigInteger('MagParam11');
            $table->bigInteger('MagParam12');
            $table->integer('Param1');
            $table->string('Param1_Desc128', 129);
            $table->integer('Param2');
            $table->string('Param2_Desc128', 129);
            $table->integer('Param3');
            $table->string('Param3_Desc128', 129);
            $table->integer('Param4');
            $table->string('Param4_Desc128', 129);
            $table->integer('Index');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefScrapOfPackageItem');
            }
        }