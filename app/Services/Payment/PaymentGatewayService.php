<?php

namespace App\Services\Payment;

use App\Models\User;
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
    public function generatePaymentUrl(User $user, array $paymentMethod, array $package, string $currency): array
    {
        dd($paymentMethod, $package, $currency);
        $method = $paymentMethod['method'];
        $iframeUrl = '';
        $modalTitle = '';

        switch ($method) {
            case 'Credit/Debit Card':
                return (new Stripe($user,))->pay();
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
