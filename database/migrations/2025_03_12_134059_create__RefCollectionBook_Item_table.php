        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefCollectionBookItemTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefCollectionBook_Item', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->string('CodeName128', 129);
            $table->string('ObjName128', 129);
            $table->string('ThemeCodeName128', 129);
            $table->integer('SlotIndex');
            $table->string('Story128', 129);
            $table->string('DDJFile128', 129);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefCollectionBook_Item');
            }
        }