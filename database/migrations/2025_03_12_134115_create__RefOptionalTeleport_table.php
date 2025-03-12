        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefOptionalTeleportTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefOptionalTeleport', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('ObjName128', 129);
            $table->string('ZoneName128', 129);
            $table->smallInteger('RegionID');
            $table->smallInteger('Pos_X');
            $table->smallInteger('Pos_Y');
            $table->smallInteger('Pos_Z');
            $table->smallInteger('WorldID');
            $table->integer('RegionIDGroup');
            $table->smallInteger('MapPoint');
            $table->smallInteger('LevelMin');
            $table->smallInteger('LevelMax');
            $table->integer('Param1')->nullable();
            $table->string('Param1_Desc_128', 129)->nullable();
            $table->integer('Param2')->nullable();
            $table->string('Param2_Desc_128', 129)->nullable();
            $table->integer('Param3')->nullable();
            $table->string('Param3_Desc_128', 129)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefOptionalTeleport');
            }
        }