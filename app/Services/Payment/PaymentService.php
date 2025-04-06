<?php

namespace App\Services\Payment;

use Stripe\StripeClient;

class PaymentService
{

    public function stripe()
    {
        $stripeSecretKey = config('payment.stripe.secret_key');
        $stripe = new StripeClient($stripeSecretKey);
//        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'https://amun-sro-website.test/api/donation/process';
//        $customer = $stripe->customers->create([
//            'name' => 'Jenny Rosen',
//            'email' => 'jennyrosen@example.com',
//        ]);


        $checkout_session = $stripe->checkout->sessions->create([
            'ui_mode' => 'embedded',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Silk package',
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'return_url' => $YOUR_DOMAIN . '/return.html?session_id={CHECKOUT_SESSION_ID}',
            'automatic_tax' => [
                'enabled' => true,
            ],
        ]);

        return json_encode(array('clientSecret' => $checkout_session->client_secret));
    }
}
