        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateLoginIpsLogTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_Login_Ips_Log', function (Blueprint $table) {
            $table->string('Charname', 64);
            $table->text('IP');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_Login_Ips_Log');
            }
        }