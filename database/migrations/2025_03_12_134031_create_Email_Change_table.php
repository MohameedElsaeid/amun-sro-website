        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateEmailChangeTable extends Migration
        {
            public function up(): void
            {
                Schema::create('Email_Change', function (Blueprint $table) {
            $table->string('UserID', 25);
            $table->text('RandomPASS');
            $table->dateTime('createtime');
            $table->text('ipaddr')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('Email_Change');
            }
        }