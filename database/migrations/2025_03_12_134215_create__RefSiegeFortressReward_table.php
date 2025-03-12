        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefSiegeFortressRewardTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefSiegeFortressReward', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('FortressID');
            $table->string('CodeName', 129);
            $table->integer('Amount');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefSiegeFortressReward');
            }
        }