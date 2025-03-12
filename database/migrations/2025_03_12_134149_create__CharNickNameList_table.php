        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateCharNickNameListTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_CharNickNameList', function (Blueprint $table) {
            $table->string('NickName16', 17);
            $table->integer('CharID');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_CharNickNameList');
            }
        }