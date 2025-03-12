<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class FacebookConversionService
{
    protected string $endpoint;
    protected string $accessToken;
    protected string $pixelId;

    protected array $fieldsToHash = [
        'em', 'ph', 'fn', 'ln', 'ge', 'db', 'ct', 'st', 'zp', 'country', 'external_id'
    ];

    public function __construct()
    {
        $this->pixelId = config('facebook.pixel_id');
        $this->accessToken = config('facebook.access_token');
        $this->endpoint = "https://graph.facebook.com/v22.0/{$this->pixelId}/events";
    }

    /**
     * Send an event payload to Facebook.
     *
     * @param array $eventData
     * @return Response
     * @throws ConnectionException
     */
    public function sendEvent(array $eventData): Response
    {
        if (isset($eventData['user_data']) && is_array($eventData['user_data'])) {
            $eventData['user_data'] = $this->hashUserData($eventData['user_data']);
        }

        $payload = [
            'data' => [
                $eventData,
            ],
        ];

        if (isset($eventData['test_event_code'])) {
            $payload['test_event_code'] = $eventData['test_event_code'];
        }

        return Http::post("{$this->endpoint}?access_token={$this->accessToken}", $payload);
    }

    /**
     * Hash user_data parameters if required.
     *
     * @param array $userData
     * @return array
     */
    protected function hashUserData(array $userData): array
    {
        foreach ($this->fieldsToHash as $field) {
            if (!empty($userData[$field])) {
                $userData[$field] = hash('sha256', $userData[$field]);
            }
        }
        return $userData;
    }
}
