        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateGuildMemberTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_GuildMember', function (Blueprint $table) {
            $table->integer('GuildID');
            $table->integer('CharID');
            $table->string('CharName', 64);
            $table->smallInteger('MemberClass');
            $table->smallInteger('CharLevel');
            $table->integer('GP_Donation');
            $table->dateTime('JoinDate');
            $table->integer('Permission')->nullable();
            $table->integer('Contribution')->nullable();
            $table->integer('GuildWarKill')->nullable();
            $table->integer('GuildWarKilled')->nullable();
            $table->string('Nickname', 64)->nullable();
            $table->integer('RefObjID')->nullable();
            $table->smallInteger('SiegeAuthority')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_GuildMember');
            }
        }