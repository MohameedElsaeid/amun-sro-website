        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefSiegeFortressItemForgeTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefSiegeFortressItemForge', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('FortressID');
            $table->integer('RefItemID');
            $table->integer('ReqGold');
            $table->integer('ReqGP');
            $table->integer('ForgeTimeMin');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefSiegeFortressItemForge');
            }
        }