        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTBUserTable extends Migration
        {
            public function up(): void
            {
                Schema::create('TB_User', function (Blueprint $table) {
            $table->integer('JID');
            $table->string('StrUserID', 25);
            $table->string('password', 50);
            $table->smallInteger('Status')->nullable();
            $table->smallInteger('GMrank')->nullable();
            $table->string('Name', 50)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('sex', 2)->nullable();
            $table->string('certificate_num', 30)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('postcode', 10)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->dateTime('regtime')->nullable();
            $table->string('reg_ip', 25)->nullable();
            $table->dateTime('Time_log')->nullable();
            $table->integer('freetime')->nullable();
            $table->smallInteger('sec_primary');
            $table->smallInteger('sec_content');
            $table->integer('AccPlayTime');
            $table->integer('LatestUpdateTime_ToPlayTime');
            $table->integer('Play123Time');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('TB_User');
            }
        }