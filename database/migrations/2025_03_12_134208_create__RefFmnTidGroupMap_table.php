        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefFmnTidGroupMapTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefFmnTidGroupMap', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('TidGroupID');
            $table->smallInteger('TypeID1');
            $table->smallInteger('TypeID2');
            $table->smallInteger('TypeID3');
            $table->smallInteger('TypeID4');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefFmnTidGroupMap');
            }
        }