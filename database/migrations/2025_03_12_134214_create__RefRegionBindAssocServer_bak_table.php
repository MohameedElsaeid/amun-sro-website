        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefRegionBindAssocServerBakTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefRegionBindAssocServer_bak', function (Blueprint $table) {
            $table->string('AreaName', 128);
            $table->integer('AssocServer');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefRegionBindAssocServer_bak');
            }
        }