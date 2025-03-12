        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateItemsTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Items', function (Blueprint $table) {
            $table->bigInteger('ID64');
            $table->integer('RefItemID');
            $table->smallInteger('OptLevel')->nullable();
            $table->bigInteger('Variance')->nullable();
            $table->integer('Data');
            $table->string('CreaterName', 64)->nullable();
            $table->smallInteger('MagParamNum');
            $table->bigInteger('MagParam1')->nullable();
            $table->bigInteger('MagParam2')->nullable();
            $table->bigInteger('MagParam3')->nullable();
            $table->bigInteger('MagParam4')->nullable();
            $table->bigInteger('MagParam5')->nullable();
            $table->bigInteger('MagParam6')->nullable();
            $table->bigInteger('MagParam7')->nullable();
            $table->bigInteger('MagParam8')->nullable();
            $table->bigInteger('MagParam9')->nullable();
            $table->bigInteger('MagParam10')->nullable();
            $table->bigInteger('MagParam11')->nullable();
            $table->bigInteger('MagParam12')->nullable();
            $table->bigInteger('Serial64');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Items');
            }
        }