        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefGameWorldNPCTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefGameWorldNPC', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('WorldCodeName128', 129);
            $table->string('NPCCodeName128', 129);
            $table->smallInteger('RegionID');
            $table->smallInteger('PosX');
            $table->smallInteger('PosY');
            $table->smallInteger('PosZ');
            $table->integer('Param1')->nullable();
            $table->integer('Param2')->nullable();
            $table->integer('Param3')->nullable();
            $table->integer('Param4')->nullable();
            $table->integer('Param5')->nullable();
            $table->integer('Param6')->nullable();
            $table->integer('Param7')->nullable();
            $table->integer('Param8')->nullable();
            $table->integer('Param9')->nullable();
            $table->integer('Param10')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefGameWorldNPC');
            }
        }