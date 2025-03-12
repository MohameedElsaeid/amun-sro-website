        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefTriggerBindActionTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefTriggerBindAction', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('TriggerID');
            $table->integer('TriggerActionID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefTriggerBindAction');
            }
        }