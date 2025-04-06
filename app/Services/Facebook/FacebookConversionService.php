<?php

namespace App\Services\Facebook;

use Exception;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Log;

class FacebookConversionService
{
    protected string $endpoint;
    protected string $accessToken;
    protected string $pixelId;

    /**
     * List of fields that require hashing.
     *
     * HINT:
     *  - These keys (e.g., 'em', 'ph', 'fn', etc.) should be provided in $userData if available.
     *
     * @var string[]
     */
    protected array $fieldsToHash = [
        'em', 'ph', 'fn', 'ln', 'ge', 'db', 'ct', 'st', 'zp', 'country', 'external_id'
    ];

    /**
     * FacebookConversionService constructor.
     *
     * HINT:
     *  - Ensure that your configuration (facebook.pixel_id and facebook.access_token) is properly set.
     *
     * @throws Exception If configuration values are missing.
     */
    public function __construct()
    {
        $this->pixelId = (string)config('facebook.pixel_id');
        $this->accessToken = (string)config('facebook.access_token');
        $this->endpoint = "https://graph.facebook.com/v22.0/{$this->pixelId}/events";
    }

    /**
     * Send an event payload to Facebook.
     *
     * HINT:
     *  - $eventData: Array containing the full event data, including 'event_name', 'event_time', 'user_data', 'custom_data', and optionally 'test_event_code'.
     *  - Ensure that if $eventData contains a 'user_data' key, its values requiring hashing are provided.
     *
     * @param array $eventData Complete event payload.
     * @return Response
     */
    public function sendEvent(array $eventData): Response
    {
        try {

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

            Log::channel('facebook')->info(json_encode($payload));

            return Http::post("{$this->endpoint}?access_token={$this->accessToken}", $payload);

        }catch (Exception $exception){
            Log::channel('fb-pixel')->critical($exception->getMessage());
        }

    }

    /**
     * Hash user data parameters that require hashing.
     *
     * HINT:
     *  - Iterate over $fieldsToHash and apply sha256 hashing to any provided non-empty values.
     *  - Ensure values are cast to string before hashing.
     *
     * @param array $userData Associative array of user data.
     * @return array Hashed user data.
     */
    protected function hashUserData(array $userData): array
    {
        foreach ($this->fieldsToHash as $field) {
            if (!empty($userData[$field])) {
                $userData[$field] = hash('sha256', (string)$userData[$field]);
            }
        }
        return $userData;
    }
}
