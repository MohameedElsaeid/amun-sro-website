        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTabRefTacticsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('Tab_RefTactics', function (Blueprint $table) {
            $table->integer('dwTacticsID');
            $table->integer('dwObjID')->nullable();
            $table->smallInteger('btAIQoS')->nullable();
            $table->integer('nMaxStamina');
            $table->smallInteger('btMaxStaminaVariance')->nullable();
            $table->integer('nSightRange');
            $table->smallInteger('btAggressType')->nullable();
            $table->integer('AggressData')->nullable();
            $table->smallInteger('btChangeTarget')->nullable();
            $table->smallInteger('btHelpRequestTo')->nullable();
            $table->smallInteger('btHelpResponseTo')->nullable();
            $table->smallInteger('btBattleStyle')->nullable();
            $table->integer('BattleStyleData')->nullable();
            $table->smallInteger('btDiversionBasis')->nullable();
            $table->integer('DiversionBasisData1')->nullable();
            $table->integer('DiversionBasisData2')->nullable();
            $table->integer('DiversionBasisData3')->nullable();
            $table->integer('DiversionBasisData4')->nullable();
            $table->integer('DiversionBasisData5')->nullable();
            $table->integer('DiversionBasisData6')->nullable();
            $table->integer('DiversionBasisData7')->nullable();
            $table->integer('DiversionBasisData8')->nullable();
            $table->smallInteger('btDiversionKeepBasis')->nullable();
            $table->integer('DiversionKeepBasisData1')->nullable();
            $table->integer('DiversionKeepBasisData2')->nullable();
            $table->integer('DiversionKeepBasisData3')->nullable();
            $table->integer('DiversionKeepBasisData4')->nullable();
            $table->integer('DiversionKeepBasisData5')->nullable();
            $table->integer('DiversionKeepBasisData6')->nullable();
            $table->integer('DiversionKeepBasisData7')->nullable();
            $table->integer('DiversionKeepBasisData8')->nullable();
            $table->smallInteger('btKeepDistance')->nullable();
            $table->integer('KeepDistanceData')->nullable();
            $table->smallInteger('btTraceType')->nullable();
            $table->smallInteger('btTraceBoundary')->nullable();
            $table->integer('TraceData')->nullable();
            $table->smallInteger('btHomingType')->nullable();
            $table->integer('HomingData')->nullable();
            $table->smallInteger('btAggressTypeOnHoming')->nullable();
            $table->smallInteger('btFleeType')->nullable();
            $table->integer('dwChampionTacticsID')->nullable();
            $table->integer('AdditionOptionFlag')->nullable();
            $table->string('szDescString128', 129)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('Tab_RefTactics');
            }
        }