<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'fbclid',
        'fbc',
        'fbp',
        'client_ip_address',
        'client_user_agent',
        'ct',
        'country',
        'st',
        'utm_ad_id',
        'utm_adset_id',
        'utm_campaign',
        'utm_campaign_id',
        'utm_medium',
        'utm_source',
        'query_fbclid',
        'query_utm_ad_id',
        'query_utm_adset_id',
        'query_utm_campaign',
        'query_utm_campaign_id',
        'query_utm_medium',
        'query_utm_source',
        'visit_time',
    ];

    protected $casts = [
        'visit_time' => 'integer',
    ];
}
