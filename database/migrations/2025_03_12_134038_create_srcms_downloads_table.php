        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSrcmsDownloadsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('srcms_downloads', function (Blueprint $table) {
            $table->integer('id');
            $table->text('link')->nullable();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('srcms_downloads');
            }
        }