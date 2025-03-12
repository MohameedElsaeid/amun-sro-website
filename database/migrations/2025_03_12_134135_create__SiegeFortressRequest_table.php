        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSiegeFortressRequestTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_SiegeFortressRequest', function (Blueprint $table) {
            $table->integer('FortressID');
            $table->integer('GuildID');
            $table->smallInteger('RequestType');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_SiegeFortressRequest');
            }
        }