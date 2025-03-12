        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefMagicOptByItemOptLevelTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefMagicOptByItemOptLevel', function (Blueprint $table) {
            $table->integer('Link');
            $table->smallInteger('RefMagicOptID');
            $table->integer('MagicOptValue');
            $table->smallInteger('TooltipType');
            $table->string('TooltipCodename', 128);
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefMagicOptByItemOptLevel');
            }
        }