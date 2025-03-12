        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefRewardPolicyToSellScrapItemTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefRewardPolicyToSellScrapItem', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('Country');
            $table->smallInteger('Cash');
            $table->smallInteger('TypeID1');
            $table->smallInteger('TypeID2');
            $table->smallInteger('TypeID3');
            $table->smallInteger('TypeID4');
            $table->string('RefItemCodeName', 129);
            $table->smallInteger('AcceptOrReject');
            $table->integer('FourCC');
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
                Schema::dropIfExists('_RefRewardPolicyToSellScrapItem');
            }
        }