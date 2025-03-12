        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSiegeFortressItemForgeTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_SiegeFortressItemForge', function (Blueprint $table) {
            $table->integer('FortressID');
            $table->integer('ItemRefID');
            $table->smallInteger('Amount');
            $table->smallInteger('Finished');
            $table->dateTime('StartDate');
            $table->dateTime('FinishDate');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_SiegeFortressItemForge');
            }
        }