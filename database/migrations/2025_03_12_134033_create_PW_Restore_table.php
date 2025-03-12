        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreatePWRestoreTable extends Migration
        {
            public function up(): void
            {
                Schema::create('PW_Restore', function (Blueprint $table) {
            $table->string('UserID', 25);
            $table->text('RandomPASS');
            $table->dateTime('createtime');
            $table->text('ipaddr')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('PW_Restore');
            }
        }