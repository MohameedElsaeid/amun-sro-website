        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateNoticeTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Notice', function (Blueprint $table) {
            $table->integer('ID');
            $table->smallInteger('ContentID');
            $table->string('Subject', 80);
            $table->string('Article', 1024);
            $table->dateTime('EditDate');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Notice');
            }
        }