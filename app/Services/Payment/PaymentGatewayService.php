<?php

namespace App\Services\Payment;

use InvalidArgumentException;

class PaymentGatewayService
{
    /**
     * Generate the payment URL and modal title based on the payment method.
     *
     * @param array $paymentMethod
     * @param string $transactionId
     *
     * @return array [$iframeUrl, $modalTitle]
     *
     * @throws InvalidArgumentException if the payment method is not supported.
     */
    public function generatePaymentUrl(array $paymentMethod, string $transactionId): array
    {
        $method = $paymentMethod['method'];
        $iframeUrl = '';
        $modalTitle = '';

        switch ($method) {
            case 'Credit/Debit Card':
                $iframeUrl = "https://checkout.stripe.com/pay/" . $transactionId;
                $modalTitle = "Complete Card Payment";
                break;
            case 'PayPal':
                $iframeUrl = "https://www.paypal.com/checkoutnow?token=" . $transactionId;
                $modalTitle = "Complete PayPal Payment";
                break;
            case 'Mobile Wallet (Egypt)':
                $iframeUrl = "https://wallet.example.com/pay/" . $transactionId;
                $modalTitle = "Complete Mobile Wallet Payment";
                break;
            default:
                throw new InvalidArgumentException('Invalid payment method');
        }

        return [$iframeUrl, $modalTitle];
    }
}
