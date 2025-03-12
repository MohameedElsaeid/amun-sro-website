        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefFmnCategoryTreeTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefFmnCategoryTree', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->string('CategoryName', 128);
            $table->string('StringID', 128);
            $table->string('ParentCategoryName', 128);
            $table->integer('TidGroupID');
            $table->smallInteger('Degree');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefFmnCategoryTree');
            }
        }