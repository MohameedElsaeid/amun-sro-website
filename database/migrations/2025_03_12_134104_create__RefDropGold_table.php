        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDropGoldTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDropGold', function (Blueprint $table) {
            $table->smallInteger('MonLevel');
            $table->float('DropProb');
            $table->integer('GoldMin');
            $table->integer('GoldMax');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDropGold');
            }
        }