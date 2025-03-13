<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKPKUpdateLogTable extends Migration
{
    public function up(): void
    {
        Schema::create('SK_PK_UpdateLog', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('JID');
            $table->string('UserName', 15)->nullable();
            $table->integer('CharID')->nullable();
            $table->string('CharName', 15)->nullable();
            $table->integer('PackageItemID');
            $table->integer('Silk_Own')->nullable();
            $table->integer('Silk_Before')->nullable();
            $table->integer('Silk_After')->nullable();
            $table->bigInteger('Gold_Remain')->nullable();
            $table->bigInteger('Gold_Before')->nullable();
            $table->bigInteger('Gold_After')->nullable();
            $table->integer('IP');
            $table->dateTime('RegDate');
            $table->bigInteger('Serial64')->nullable();
            $table->integer('ShardID')->nullable();
            $table->string('ServiceCode', 10)->nullable();
            $table->integer('_Strength')->nullable();
            $table->integer('_Intellect')->nullable();
            $table->integer('_CurLevel')->nullable();
            $table->integer('_Statpoint')->nullable();
            $table->string('_NewName', 12)->nullable();
            $table->string('_OldPetName', 12)->nullable();
            $table->string('_NewPetName', 12)->nullable();
            $table->integer('_NewStatPoint')->nullable();
            $table->integer('_NewLevel')->nullable();
            $table->integer('_NewStrength')->nullable();
            $table->integer('_NewIntellect')->nullable();
            $table->integer('_Skill_Own')->nullable();
            $table->integer('_Skill_Before')->nullable();
            $table->integer('_Skill_After')->nullable();
            $table->string('_Item_BH', 200)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SK_PK_UpdateLog');
    }
}
