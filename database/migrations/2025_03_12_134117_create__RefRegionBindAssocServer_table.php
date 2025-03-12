        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefRegionBindAssocServerTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefRegionBindAssocServer', function (Blueprint $table) {
            $table->string('AreaName', 128);
            $table->integer('AssocServer');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefRegionBindAssocServer');
            }
        }