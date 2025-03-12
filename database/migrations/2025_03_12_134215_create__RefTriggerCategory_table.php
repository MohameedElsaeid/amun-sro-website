        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefTriggerCategoryTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefTriggerCategory', function (Blueprint $table) {
            $table->integer('Service');
            $table->integer('ID');
            $table->string('CodeName128', 129);
            $table->string('ObjName128', 129)->nullable();
            $table->integer('IndexNumber');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefTriggerCategory');
            }
        }