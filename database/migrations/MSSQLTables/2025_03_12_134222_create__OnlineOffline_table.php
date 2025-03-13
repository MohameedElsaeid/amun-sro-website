<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineOfflineTable extends Migration
{
    public function up(): void
    {
        Schema::create('_OnlineOffline', function (Blueprint $table) {
            $table->integer('No.');
            $table->integer('CharID');
            $table->string('Charname', 64);
            $table->string('Status', 20);
            $table->dateTime('Date');
            $table->bigInteger('Minutes')->nullable();
            $table->bigInteger('tMinutes')->nullable();
            $table->integer('eSilk')->nullable();
            $table->text('mOnline')->nullable();
            $table->integer('Silk/Hour');
            $table->dateTime('stillOnline@')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_OnlineOffline');
    }
}
