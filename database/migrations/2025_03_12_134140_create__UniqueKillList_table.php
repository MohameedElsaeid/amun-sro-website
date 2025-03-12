        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateUniqueKillListTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_UniqueKillList', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('CharID');
            $table->string('CodeName128', 128);
            $table->dateTime('time');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_UniqueKillList');
            }
        }