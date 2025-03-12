        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCharInstanceWorldDataTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CharInstanceWorldData', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('DungeonKeyID');
            $table->integer('WorldID');
            $table->integer('LayerID');
            $table->dateTime('OpenedTime');
            $table->smallInteger('RegionID');
            $table->integer('PosX');
            $table->integer('PosY');
            $table->integer('PosZ');
            $table->smallInteger('IsActivated');
            $table->integer('EnterCount');
            $table->dateTime('LastEnterTime');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CharInstanceWorldData');
            }
        }