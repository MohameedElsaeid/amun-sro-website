        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateLogSEEKNDESTROYITEMFASTTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Log_SEEK_N_DESTROY_ITEM_FAST', function (Blueprint $table) {
            $table->dateTime('DeletedTime')->nullable();
            $table->smallInteger('OwnerType')->nullable();
            $table->integer('OwnerID')->nullable();
            $table->bigInteger('ID64')->nullable();
            $table->string('CodeName', 129)->nullable();
            $table->smallInteger('OptLevel')->nullable();
            $table->bigInteger('Variance')->nullable();
            $table->integer('Data')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Log_SEEK_N_DESTROY_ITEM_FAST');
            }
        }