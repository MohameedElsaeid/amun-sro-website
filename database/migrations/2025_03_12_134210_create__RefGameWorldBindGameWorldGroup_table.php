        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefGameWorldBindGameWorldGroupTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefGameWorldBindGameWorldGroup', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->integer('GameWorldID');
            $table->integer('GameWorldGroupID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefGameWorldBindGameWorldGroup');
            }
        }