        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSrcmsNewscommentsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('srcms_newscomments', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('newsID')->nullable();
            $table->string('author', 50)->nullable();
            $table->text('text')->nullable();
            $table->dateTime('time')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('srcms_newscomments');
            }
        }