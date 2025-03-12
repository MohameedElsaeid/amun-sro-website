        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefObjCharTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefObjChar', function (Blueprint $table) {
            $table->integer('ID');
            $table->smallInteger('Lvl');
            $table->smallInteger('CharGender');
            $table->integer('MaxHP');
            $table->integer('MaxMP');
            $table->integer('ResistFrozen');
            $table->integer('ResistFrostbite');
            $table->integer('ResistBurn');
            $table->integer('ResistEShock');
            $table->integer('ResistPoison');
            $table->integer('ResistZombie');
            $table->integer('ResistSleep');
            $table->integer('ResistRoot');
            $table->integer('ResistSlow');
            $table->integer('ResistFear');
            $table->integer('ResistMyopia');
            $table->integer('ResistBlood');
            $table->integer('ResistStone');
            $table->integer('ResistDark');
            $table->integer('ResistStun');
            $table->integer('ResistDisea');
            $table->integer('ResistChaos');
            $table->integer('ResistCsePD');
            $table->integer('ResistCseMD');
            $table->integer('ResistCseSTR');
            $table->integer('ResistCseINT');
            $table->integer('ResistCseHP');
            $table->integer('ResistCseMP');
            $table->integer('Resist24');
            $table->integer('ResistBomb');
            $table->integer('Resist26');
            $table->integer('Resist27');
            $table->integer('Resist28');
            $table->integer('Resist29');
            $table->integer('Resist30');
            $table->integer('Resist31');
            $table->integer('Resist32');
            $table->smallInteger('InventorySize');
            $table->smallInteger('CanStore_TID1');
            $table->smallInteger('CanStore_TID2');
            $table->smallInteger('CanStore_TID3');
            $table->smallInteger('CanStore_TID4');
            $table->smallInteger('CanBeVehicle');
            $table->smallInteger('CanControl');
            $table->smallInteger('DamagePortion');
            $table->smallInteger('MaxPassenger');
            $table->integer('AssocTactics');
            $table->integer('PD');
            $table->integer('MD');
            $table->integer('PAR');
            $table->integer('MAR');
            $table->integer('ER');
            $table->integer('BR');
            $table->integer('HR');
            $table->integer('CHR');
            $table->integer('ExpToGive');
            $table->integer('CreepType');
            $table->smallInteger('Knockdown');
            $table->integer('KO_RecoverTime');
            $table->integer('DefaultSkill_1')->nullable();
            $table->integer('DefaultSkill_2')->nullable();
            $table->integer('DefaultSkill_3')->nullable();
            $table->integer('DefaultSkill_4')->nullable();
            $table->integer('DefaultSkill_5')->nullable();
            $table->integer('DefaultSkill_6')->nullable();
            $table->integer('DefaultSkill_7')->nullable();
            $table->integer('DefaultSkill_8')->nullable();
            $table->integer('DefaultSkill_9')->nullable();
            $table->integer('DefaultSkill_10')->nullable();
            $table->smallInteger('TextureType')->nullable();
            $table->integer('Except_1')->nullable();
            $table->integer('Except_2')->nullable();
            $table->integer('Except_3')->nullable();
            $table->integer('Except_4')->nullable();
            $table->integer('Except_5')->nullable();
            $table->integer('Except_6')->nullable();
            $table->integer('Except_7')->nullable();
            $table->integer('Except_8')->nullable();
            $table->integer('Except_9')->nullable();
            $table->integer('Except_10')->nullable();
            $table->integer('Link')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefObjChar');
            }
        }