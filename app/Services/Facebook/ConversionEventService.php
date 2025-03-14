<?php

namespace App\Services\Facebook;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ConversionEventService
{
    protected FacebookConversionService $facebookService;

    /**
     * ConversionEventService constructor.
     *
     * @param FacebookConversionService $facebookService Instance of FacebookConversionService.
     *
     * HINT:
     *  - $facebookService: A fully configured instance used to send event data to Facebook.
     */
    public function __construct(FacebookConversionService $facebookService)
    {
        $this->facebookService = $facebookService;
    }

    /**
     * Track a login event.
     *
     * HINT:
     *  - $userData: An associative array with keys like 'em', 'ph', etc.
     *  - $customData: An associative array with custom event parameters.
     *  - $testEventCode: (Optional) A test event code if you want to mark this as a test event.
     *
     * @param array $userData Event-specific user data.
     * @param array $customData Custom event parameters.
     * @param string|null $testEventCode Optional test event code.
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackLogin(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('Login', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Build the payload for an event.
     *
     * HINT:
     *  - $eventName: The name of the event (e.g., 'Login', 'Purchase').
     *  - $userData: Standard user data keys (e.g., 'em', 'ph', 'fn', 'ln') that may be merged with session tracking data.
     *  - $customData: Additional event-specific parameters (e.g., 'currency', 'value', 'content_ids').
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param string $eventName
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return array The complete payload for the event.
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    protected function buildEventPayload(string $eventName, array $userData = [], array $customData = [], ?string $testEventCode = null): array
    {
        $trackingData = $this->getTrackingData();
        $mergedUserData = array_merge($trackingData, $userData);

        $payload = [
            'event_name' => $eventName,
            'event_time' => time(),
            'action_source' => 'website',
            'user_data' => $mergedUserData,
            'custom_data' => $customData,
        ];

        if ($testEventCode !== null) {
            $payload['test_event_code'] = $testEventCode;
        }

        return $payload;
    }

    /**
     * Retrieve tracking data stored in the session.
     *
     * HINT:
     *  - This method automatically retrieves data stored under the 'fb_tracking' key in the session.
     *
     * @return array Array of tracking data.
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    protected function getTrackingData(): array
    {
        return session()->get('fb_tracking', []);
    }

    /**
     * Track a registration event.
     *
     * HINT:
     *  - $userData: Include keys such as 'em', 'ph', 'fn', 'ln', etc.
     *  - $customData: Include any additional registration parameters.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackRegister(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('CompleteRegistration', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track an Add to Cart event.
     *
     * HINT:
     *  - $userData: Expected keys might include 'em', 'ph', etc.
     *  - $customData: Should include e-commerce keys like 'content_ids', 'contents', 'currency', 'value'.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackAddToCart(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('AddToCart', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws ConnectionException
     */
    public function sendPageView(): Response
    {
        $user = auth()->user();
        $userData = [];
        if ($user) {
            $userData['em'] = $user->Email;
            $userData['fn'] = $user->StrUserID;
        }
        $customData = [
            'event_source_url' => request()->fullUrl(),
            'referrer_url' => request()->headers->get('referer') ?? '',
        ];

        $this->trackViewContent($userData, $customData);
    }

    /**
     * Track a View Content event.
     *
     * HINT:
     *  - $userData: Include the usual customer information keys.
     *  - $customData: Should include page or product related keys like 'content_ids', 'contents', 'currency', 'value'.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackViewContent(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('ViewContent', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track an Add Payment Info event.
     *
     * HINT:
     *  - $userData: Use customer data keys ('em', 'ph', etc.) with necessary hashing.
     *  - $customData: Include payment related keys if needed.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackAddPaymentInfo(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('AddPaymentInfo', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track a Contact event.
     *
     * HINT:
     *  - $userData: Provide user details such as 'em', 'ph', etc.
     *  - $customData: Include contact-specific information if necessary.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackContact(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('Contact', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track an Init Payment event.
     *
     * HINT:
     *  - $userData: Pass standard user data keys (hashed if required).
     *  - $customData: Any initial payment parameters or identifiers.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackInitPayment(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('InitPayment', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track a Purchase event.
     *
     * HINT:
     *  - $userData: Must include customer data keys such as 'em', 'ph', etc.
     *  - $customData: Should include e-commerce keys like 'content_ids', 'currency', 'value', and optionally 'num_items'.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackPurchase(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('Purchase', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track an Initiate Checkout event.
     *
     * HINT:
     *  - $userData: Include standard customer keys like 'em', 'ph', etc.
     *  - $customData: Should contain checkout details such as 'content_ids', 'contents', 'currency', 'num_items', 'value'.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackInitiateCheckout(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('InitiateCheckout', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track a Lead event.
     *
     * HINT:
     *  - $userData: Provide keys such as 'em', 'ph', etc. (hashed if required).
     *  - $customData: Optionally include lead-specific data like 'currency' or 'value'.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackLead(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('Lead', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track a Search event.
     *
     * HINT:
     *  - $userData: Provide customer information keys (e.g. 'em', 'ph').
     *  - $customData: Include search-related keys like 'search_string', and optionally 'content_ids', 'contents', 'currency', 'value'.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackSearch(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('Search', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track a Submit Application event.
     *
     * HINT:
     *  - $userData: Include keys like 'em', 'ph', etc.
     *  - $customData: Can include application details as needed.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackSubmitApplication(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('SubmitApplication', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track a Subscribe event.
     *
     * HINT:
     *  - $userData: Standard customer keys such as 'em', 'ph', etc.
     *  - $customData: Subscription related keys like 'currency', 'predicted_ltv', 'value'.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackSubscribe(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('Subscribe', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }

    /**
     * Track a Download event.
     *
     * HINT:
     *  - $userData: Provide keys such as 'em', 'ph', etc.
     *  - $customData: Include any additional information related to the download.
     *  - $testEventCode: (Optional) A test event code.
     *
     * @param array $userData
     * @param array $customData
     * @param string|null $testEventCode
     * @return Response
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function trackDownload(array $userData = [], array $customData = [], ?string $testEventCode = null): Response
    {
        $payload = $this->buildEventPayload('Download', $userData, $customData, $testEventCode);
        return $this->facebookService->sendEvent($payload);
    }
}
