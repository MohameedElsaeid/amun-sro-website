<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('fbclid')->nullable();
            $table->string('fbc')->nullable();
            $table->string('fbp')->nullable();
            $table->string('client_ip_address')->nullable()->index();
            $table->text('client_user_agent')->nullable();
            $table->string('ct')->nullable()->index();
            $table->string('country')->nullable()->index();
            $table->string('st')->nullable()->index();
            $table->string('utm_ad_id')->nullable();
            $table->string('utm_adset_id')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_campaign_id')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_source')->nullable();
            $table->string('query_fbclid')->nullable();
            $table->string('query_utm_ad_id')->nullable();
            $table->string('query_utm_adset_id')->nullable();
            $table->string('query_utm_campaign')->nullable();
            $table->string('query_utm_campaign_id')->nullable();
            $table->string('query_utm_medium')->nullable();
            $table->string('query_utm_source')->nullable();
            $table->unsignedBigInteger('visit_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
