        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefMonsterAssignedItemDropTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefMonster_AssignedItemDrop', function (Blueprint $table) {
            $table->integer('RefMonsterID');
            $table->integer('RefItemID');
            $table->smallInteger('DropGroupType');
            $table->smallInteger('OptLevel');
            $table->smallInteger('DropAmountMin');
            $table->smallInteger('DropAmountMax');
            $table->float('DropRatio');
            $table->smallInteger('RefMagicOptionID1')->nullable();
            $table->integer('CustomValue1')->nullable();
            $table->smallInteger('RefMagicOptionID2')->nullable();
            $table->integer('CustomValue2')->nullable();
            $table->smallInteger('RefMagicOptionID3')->nullable();
            $table->integer('CustomValue3')->nullable();
            $table->smallInteger('RefMagicOptionID4')->nullable();
            $table->integer('CustomValue4')->nullable();
            $table->smallInteger('RefMagicOptionID5')->nullable();
            $table->integer('CustomValue5')->nullable();
            $table->smallInteger('RefMagicOptionID6')->nullable();
            $table->integer('CustomValue6')->nullable();
            $table->smallInteger('RefMagicOptionID7')->nullable();
            $table->integer('CustomValue7')->nullable();
            $table->smallInteger('RefMagicOptionID8')->nullable();
            $table->integer('CustomValue8')->nullable();
            $table->smallInteger('RefMagicOptionID9')->nullable();
            $table->integer('CustomValue9')->nullable();
            $table->string('RentCodeName', 129);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefMonster_AssignedItemDrop');
            }
        }