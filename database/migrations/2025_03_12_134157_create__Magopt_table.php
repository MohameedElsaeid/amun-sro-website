        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateMagoptTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Magopt', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 128);
            $table->string('desc', 255);
            $table->integer('mLevel');
            $table->string('extension', 255);
            $table->integer('sortkey');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Magopt');
            }
        }