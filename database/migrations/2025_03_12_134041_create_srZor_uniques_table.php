        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSrZorUniquesTable extends Migration
        {
            public function up(): void
            {
                Schema::create('srZor_uniques', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('CharName', 20);
            $table->string('MobName', 50);
            $table->string('time', 100);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('srZor_uniques');
            }
        }