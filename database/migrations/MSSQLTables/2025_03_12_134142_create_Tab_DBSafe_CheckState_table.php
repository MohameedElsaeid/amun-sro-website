<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabDBSafeCheckStateTable extends Migration
{
    public function up(): void
    {
        Schema::create('Tab_DBSafe_CheckState', function (Blueprint $table) {
            $table->smallInteger('btCheckIn')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Tab_DBSafe_CheckState');
    }
}
