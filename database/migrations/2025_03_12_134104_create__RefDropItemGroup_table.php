        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefDropItemGroupTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefDropItemGroup', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('RefItemGroupID');
            $table->string('CodeName128', 129);
            $table->integer('RefItemID');
            $table->float('SelectRatio');
            $table->integer('RefMagicGroupID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefDropItemGroup');
            }
        }