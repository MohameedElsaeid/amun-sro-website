        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefTriggerBindEventTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefTriggerBindEvent', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('TriggerID');
            $table->integer('TriggerEventID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefTriggerBindEvent');
            }
        }