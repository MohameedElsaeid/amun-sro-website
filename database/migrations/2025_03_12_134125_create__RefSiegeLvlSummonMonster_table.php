        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefSiegeLvlSummonMonsterTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefSiegeLvlSummonMonster', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('RefObjID');
            $table->integer('RefOrgObjID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefSiegeLvlSummonMonster');
            }
        }