<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationReputationTable extends Migration
{
    public function up(): void
    {
        Schema::create('_AssociationReputation', function (Blueprint $table) {
            $table->string('AssociationCodeName', 128);
            $table->string('AssociationTypeName', 128);
            $table->integer('Reputation');
            $table->integer('PriorOccupation');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_AssociationReputation');
    }
}
