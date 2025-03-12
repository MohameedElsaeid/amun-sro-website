<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ConversionEventService
{
    protected FacebookConversionService $facebookService;

    public function __construct(FacebookConversionService $facebookService)
    {
        $this->facebookService = $facebookService;
    }

    /**
     * @param array $userData
     * @param array $customData
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackLogin(array $userData = [], array $customData = []): Response
    {
        $payload = $this->buildEventPayload('Login', $userData, $customData);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Build the payload for an event.
     *
     * @param string $eventName
     * @param array $userData Event-specific user data (e.g. email, phone)
     * @param array $customData Event-specific custom data (e.g. currency, value)
     * @return array
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    protected function buildEventPayload(string $eventName, array $userData = [], array $customData = []): array
    {
        $trackingData = $this->getTrackingData();
        $mergedUserData = array_merge($trackingData, $userData);

        return [
            'event_name' => $eventName,
            'event_time' => time(),
            'action_source' => 'website',
            'user_data' => $mergedUserData,
            'custom_data' => $customData,
        ];
    }

    // Define a function for each event:

    /**
     * Get tracking data stored in the session.
     *
     * @return array
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    protected function getTrackingData(): array
    {
        return session()->get('fb_tracking', []);
    }

    /**
     * @param array $userData
     * @param array $customData
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackRegister(array $userData = [], array $customData = []): Response
    {
        $payload = $this->buildEventPayload('Register', $userData, $customData);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * @param array $userData
     * @param array $customData
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackAddToCart(array $userData = [], array $customData = []): Response
    {
        $payload = $this->buildEventPayload('AddToCart', $userData, $customData);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * @param array $userData
     * @param array $customData
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackInitPayment(array $userData = [], array $customData = []): Response
    {
        $payload = $this->buildEventPayload('InitPayment', $userData, $customData);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * @param array $userData
     * @param array $customData
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackPurchase(array $userData = [], array $customData = []): Response
    {
        $payload = $this->buildEventPayload('Purchase', $userData, $customData);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * @param array $userData
     * @param array $customData
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackDownload(array $userData = [], array $customData = []): Response
    {
        $payload = $this->buildEventPayload('Download', $userData, $customData);
        return $this->facebookService->sendEvent($payload);
    }
}
