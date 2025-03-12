        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRegionNamesTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RegionNames', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('RegionID');
            $table->string('TownName', 25);
            $table->string('SafeZone', 9);
            $table->integer('TownNumber');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RegionNames');
            }
        }