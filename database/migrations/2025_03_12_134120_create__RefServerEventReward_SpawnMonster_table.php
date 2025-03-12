        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefServerEventRewardSpawnMonsterTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefServerEventReward_SpawnMonster', function (Blueprint $table) {
            $table->integer('OwnerRewardID');
            $table->integer('RegionID');
            $table->float('PosX');
            $table->float('PosY');
            $table->float('PosZ');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefServerEventReward_SpawnMonster');
            }
        }