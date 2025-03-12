        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefInstanceWorldStartPosTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefInstance_World_Start_Pos', function (Blueprint $table) {
            $table->integer('WorldID');
            $table->smallInteger('RegionID');
            $table->integer('PosX');
            $table->integer('PosY');
            $table->integer('PosZ');
            $table->integer('Param')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefInstance_World_Start_Pos');
            }
        }