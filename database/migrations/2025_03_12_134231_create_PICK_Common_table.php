        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreatePICKCommonTable extends Migration
        {
            public function up(): void
            {
                Schema::create('PICK_Common', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('GroupID');
            $table->text('GroupCodeName');
            $table->text('ItemCodeName');
            $table->integer('ItemCount');
            $table->integer('ItemPlus');
            $table->float('Ratio');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('PICK_Common');
            }
        }