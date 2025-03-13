<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBalanceNhatTable extends Migration
{
    public function up(): void
    {
        Schema::create('_UserBalance_Nhat', function (Blueprint $table) {
            $table->integer('JID');
            $table->decimal('Balance', 18, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_UserBalance_Nhat');
    }
}
