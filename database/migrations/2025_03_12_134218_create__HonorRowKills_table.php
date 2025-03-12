        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateHonorRowKillsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_HonorRowKills', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Kesen');
            $table->integer('Kesilen');
            $table->integer('DescType');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_HonorRowKills');
            }
        }