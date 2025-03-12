        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRandomPlayer&DateTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RandomPlayer&Date', function (Blueprint $table) {
            $table->dateTime('NextDate')->nullable();
            $table->dateTime('RefreshedDate')->nullable();
            $table->integer('CharID')->nullable();
            $table->string('Charname', 64)->nullable();
            $table->string('Desc', 20)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RandomPlayer&Date');
            }
        }