        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefRentItemTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefRentItem', function (Blueprint $table) {
            $table->integer('service');
            $table->string('RentCodeName', 129);
            $table->integer('RefItemID');
            $table->smallInteger('CanDelete');
            $table->smallInteger('CnaRecharge');
            $table->integer('RentType')->nullable();
            $table->dateTime('StartTime')->nullable();
            $table->dateTime('EndTime')->nullable();
            $table->smallInteger('TimeCnt')->nullable();
            $table->integer('Time1')->nullable();
            $table->integer('Time2')->nullable();
            $table->integer('Time3')->nullable();
            $table->integer('Time4')->nullable();
            $table->integer('Time5')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefRentItem');
            }
        }