        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateVoteLinksTable extends Migration
        {
            public function up(): void
            {
                Schema::create('vote_links', function (Blueprint $table) {
            $table->integer('ID');
            $table->text('Link')->nullable();
            $table->text('Img')->nullable();
            $table->integer('Time')->nullable();
            $table->integer('Reward')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('vote_links');
            }
        }