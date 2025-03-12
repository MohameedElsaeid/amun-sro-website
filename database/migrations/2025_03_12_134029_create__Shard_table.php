        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateShardTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Shard', function (Blueprint $table) {
            $table->smallInteger('nID');
            $table->smallInteger('nFarmID');
            $table->smallInteger('nContentID');
            $table->string('szName', 32);
            $table->string('szDesc', 256);
            $table->string('szDBConfig', 256);
            $table->smallInteger('nMaxUser');
            $table->smallInteger('nStartupServerID');
            $table->smallInteger('nStatus');
            $table->smallInteger('nCurrentUserRatio');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Shard');
            }
        }