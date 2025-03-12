        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateBOXRANDOM1Table extends Migration
        {
            public function up(): void
            {
                Schema::create('_BOXRANDOM1', function (Blueprint $table) {
            $table->string('GiftItems', 129)->nullable();
            $table->string('SpecialItems', 129)->nullable();
            $table->string('PremItems', 129)->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_BOXRANDOM1');
            }
        }