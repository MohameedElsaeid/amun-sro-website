        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSRShardCharNamesTable extends Migration
        {
            public function up(): void
            {
                Schema::create('SR_ShardCharNames', function (Blueprint $table) {
            $table->integer('UserJID');
            $table->integer('ShardID');
            $table->string('CharName', 64);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('SR_ShardCharNames');
            }
        }