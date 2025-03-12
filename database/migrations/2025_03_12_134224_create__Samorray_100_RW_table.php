        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSamorray100RWTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Samorray_100_RW', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('CharID')->nullable();
            $table->smallInteger('CurLevel')->nullable();
            $table->string('Charname', 64)->nullable();
            $table->integer('charjid')->nullable();
            $table->text('hwid')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Samorray_100_RW');
            }
        }