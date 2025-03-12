        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateShardCurrentUserTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_ShardCurrentUser', function (Blueprint $table) {
            $table->integer('nID');
            $table->integer('nShardID');
            $table->integer('nUserCount');
            $table->dateTime('dLogDate');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_ShardCurrentUser');
            }
        }