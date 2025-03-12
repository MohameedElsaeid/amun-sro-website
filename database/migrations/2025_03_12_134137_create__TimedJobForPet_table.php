        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTimedJobForPetTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_TimedJobForPet', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('CharID');
            $table->smallInteger('Category');
            $table->integer('JobID');
            $table->integer('TimeToKeep');
            $table->integer('Data1')->nullable();
            $table->integer('Data2')->nullable();
            $table->integer('Data3')->nullable();
            $table->integer('Data4')->nullable();
            $table->integer('Data5')->nullable();
            $table->integer('Data6')->nullable();
            $table->integer('Data7')->nullable();
            $table->integer('Data8')->nullable();
            $table->bigInteger('Serial64');
            $table->integer('JID')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_TimedJobForPet');
            }
        }