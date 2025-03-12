        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSiegeFortressStatusTable extends Migration
        {
            public function up(): void
            {
                Schema::create('__SiegeFortressStatus__', function (Blueprint $table) {
            $table->integer('ShardID');
            $table->string('FortressName', 129);
            $table->smallInteger('FortressScale');
            $table->smallInteger('TaxRatio');
            $table->string('OwnerGuildName', 129)->nullable();
            $table->string('OwnerGuildMaster', 129)->nullable();
            $table->string('OwnerAllianceGuildName1', 129)->nullable();
            $table->string('OwnerAllianceGuildName2', 129)->nullable();
            $table->string('OwnerAllianceGuildName3', 129)->nullable();
            $table->string('OwnerAllianceGuildName4', 129)->nullable();
            $table->string('OwnerAllianceGuildName5', 129)->nullable();
            $table->string('OwnerAllianceGuildName6', 129)->nullable();
            $table->string('OwnerAllianceGuildName7', 129)->nullable();
            $table->string('OwnerAllianceGuildName8', 129)->nullable();
            $table->dateTime('OwnerUpdateDate')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('__SiegeFortressStatus__');
            }
        }