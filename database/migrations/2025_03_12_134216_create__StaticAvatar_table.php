        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateStaticAvatarTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_StaticAvatar', function (Blueprint $table) {
            $table->integer('CharID');
            $table->integer('Param1')->nullable();
            $table->integer('Param2')->nullable();
            $table->integer('Param3')->nullable();
            $table->integer('Param4')->nullable();
            $table->integer('Param5')->nullable();
            $table->integer('Param6')->nullable();
            $table->integer('Param7')->nullable();
            $table->integer('Param8')->nullable();
            $table->integer('Param9')->nullable();
            $table->integer('Param10')->nullable();
            $table->integer('Param11')->nullable();
            $table->integer('Param12')->nullable();
            $table->integer('Param13')->nullable();
            $table->integer('Param14')->nullable();
            $table->integer('Param15')->nullable();
            $table->integer('Param16')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_StaticAvatar');
            }
        }