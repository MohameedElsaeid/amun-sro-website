        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateSiegeFortressStructTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_SiegeFortressStruct', function (Blueprint $table) {
            $table->integer('FortressID');
            $table->integer('OwnerGuildID');
            $table->integer('RefEventStructID');
            $table->integer('RefObjID');
            $table->integer('HP');
            $table->dateTime('MakeDate');
            $table->smallInteger('State');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_SiegeFortressStruct');
            }
        }