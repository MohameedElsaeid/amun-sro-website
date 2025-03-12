        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateBOOKSTable extends Migration
        {
            public function up(): void
            {
                Schema::create('BOOKS', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title', 255);
            $table->dateTime('pubdate');
            $table->string('synopsis', 4000);
            $table->boolean('inprint');
            $table->integer('salesCount');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('BOOKS');
            }
        }