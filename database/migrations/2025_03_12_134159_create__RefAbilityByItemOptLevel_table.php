        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefAbilityByItemOptLevelTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefAbilityByItemOptLevel', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->integer('RefItemID');
            $table->smallInteger('ItemOptLevel');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefAbilityByItemOptLevel');
            }
        }