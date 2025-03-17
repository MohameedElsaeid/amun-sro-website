<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('TB_User', function (Blueprint $table) {
            $table->string('referral_code')->nullable();
            $table->string('referred_by')->nullable();
        });

        DB::statement('CREATE UNIQUE INDEX user_rf ON TB_User(referral_code) WHERE referral_code IS NOT NULL');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('TB_User', function (Blueprint $table) {
            $table->dropColumn('referral_code');
            $table->dropColumn('referred_by');
        });
    }
};
