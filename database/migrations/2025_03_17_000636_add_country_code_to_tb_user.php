<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('TB_User', function (Blueprint $table) {
            $table->string('country_code', 10)->nullable()->after('phone'); // Adjust the column length as needed
        });
    }

    public function down()
    {
        Schema::table('TB_User', function (Blueprint $table) {
            $table->dropColumn('country_code');
        });
    }
};
