<?php

namespace App\Jobs;

use App\Models\Visit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class VisitsCreationJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private readonly array $tracking)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Visit::create([
            'fbclid' => $this->tracking['fbclid'] ?? null,
            'fbc' => $this->tracking['fbc'] ?? null,
            'fbp' => $this->tracking['fbp'] ?? null,
            'client_ip_address' => $this->tracking['client_ip_address'] ?? null,
            'client_user_agent' => $this->tracking['client_user_agent'] ?? null,
            'ct' => $this->tracking['ct'] ?? null,
            'country' => $this->tracking['country'] ?? null,
            'st' => $this->tracking['st'] ?? null,
            'utm_ad_id' => $this->tracking['utm']['utm_ad_id'] ?? null,
            'utm_adset_id' => $this->tracking['utm']['utm_adset_id'] ?? null,
            'utm_campaign' => $this->tracking['utm']['utm_campaign'] ?? null,
            'utm_campaign_id' => $this->tracking['utm']['utm_campaign_id'] ?? null,
            'utm_medium' => $this->tracking['utm']['utm_medium'] ?? null,
            'utm_source' => $this->tracking['utm']['utm_source'] ?? null,
            'query_fbclid' => $this->tracking['query']['fbclid'] ?? null,
            'query_utm_ad_id' => $this->tracking['query']['utm_ad_id'] ?? null,
            'query_utm_adset_id' => $this->tracking['query']['utm_adset_id'] ?? null,
            'query_utm_campaign' => $this->tracking['query']['utm_campaign'] ?? null,
            'query_utm_campaign_id' => $this->tracking['query']['utm_campaign_id'] ?? null,
            'query_utm_medium' => $this->tracking['query']['utm_medium'] ?? null,
            'query_utm_source' => $this->tracking['query']['utm_source'] ?? null,
            'visit_time' => $this->tracking['utm']['visit_time'] ?? time(),
        ]);
    }
}
