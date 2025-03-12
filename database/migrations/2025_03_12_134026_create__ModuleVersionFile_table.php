        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateModuleVersionFileTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_ModuleVersionFile', function (Blueprint $table) {
            $table->integer('nID');
            $table->integer('nVersion');
            $table->smallInteger('nDivisionID');
            $table->smallInteger('nContentID');
            $table->smallInteger('nModuleID');
            $table->string('szFilename', 256);
            $table->string('szPath', 256);
            $table->integer('nFileSize');
            $table->smallInteger('nFileType');
            $table->integer('nFileTypeVersion');
            $table->smallInteger('nToBePacked');
            $table->dateTime('timeModified');
            $table->smallInteger('nValid');
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_ModuleVersionFile');
            }
        }