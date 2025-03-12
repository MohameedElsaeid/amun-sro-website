        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDropOptLvlSelTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDropOptLvlSel', function (Blueprint $table) {
            $table->smallInteger('OptLevel');
            $table->float('Prob');
            $table->integer('ReqOnlineTime');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDropOptLvlSel');
            }
        }