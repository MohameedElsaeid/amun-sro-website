        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreatePayOpTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_PayOp', function (Blueprint $table) {
            $table->string('ID', 64)->nullable();
            $table->integer('UserJID')->nullable();
            $table->integer('Amount')->nullable();
            $table->boolean('Status')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_PayOp');
            }
        }