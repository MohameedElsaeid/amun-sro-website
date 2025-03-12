        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateMemoTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Memo', function (Blueprint $table) {
            $table->bigInteger('ID64');
            $table->integer('CharID');
            $table->string('FromCharName', 64);
            $table->string('Message', 1000)->nullable();
            $table->dateTime('Date');
            $table->smallInteger('Status');
            $table->integer('RefObjID')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Memo');
            }
        }