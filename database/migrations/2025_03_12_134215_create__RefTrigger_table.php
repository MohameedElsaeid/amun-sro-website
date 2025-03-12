        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefTriggerTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefTrigger', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->smallInteger('IsActive');
            $table->smallInteger('IsRepeat');
            $table->string('Comment512', 513)->nullable();
            $table->integer('IndexNumber');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefTrigger');
            }
        }