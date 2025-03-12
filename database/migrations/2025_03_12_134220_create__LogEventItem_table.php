        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateLogEventItemTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_LogEventItem', function (Blueprint $table) {
            $table->dateTime('EventTime');
            $table->integer('CharID');
            $table->integer('ItemRefID');
            $table->integer('dwData');
            $table->smallInteger('TargetStorage');
            $table->smallInteger('Operation');
            $table->smallInteger('Slot_From');
            $table->smallInteger('Slot_To');
            $table->string('EventPos', 64)->nullable();
            $table->string('strDesc', 128)->nullable();
            $table->bigInteger('Serial64');
            $table->bigInteger('Gold')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_LogEventItem');
            }
        }