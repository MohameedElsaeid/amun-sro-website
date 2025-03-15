<?php

namespace App\Services\Payment;

class PaymentInformationProvider
{
    public function getPaymentInformation(): array
    {
        return [
            'packages' => [
                [
                    'silk' => 750,
                    'bonus' => '2%',
                    'prices' => [
                        'USDT' => 5,
                        'TL' => 120,
                        'EGP' => 150,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 1500,
                    'bonus' => '4%',
                    'prices' => [
                        'USDT' => 10,
                        'TL' => 260,
                        'EGP' => 390,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 3000,
                    'bonus' => '6%',
                    'prices' => [
                        'USDT' => 19,
                        'TL' => 494,
                        'EGP' => 741,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 6000,
                    'bonus' => '8%',
                    'prices' => [
                        'USDT' => 36,
                        'TL' => 936,
                        'EGP' => 1350,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 12000,
                    'bonus' => '10%',
                    'prices' => [
                        'USDT' => 68,
                        'TL' => 1768,
                        'EGP' => 2465,
                    ],
                    'label' => 'POPULAR',
                ],
                [
                    'silk' => 25000,
                    'bonus' => '12%',
                    'prices' => [
                        'USDT' => 133,
                        'TL' => 3458,
                        'EGP' => 4655,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 50000,
                    'bonus' => '14%',
                    'prices' => [
                        'USDT' => 250,
                        'TL' => 6500,
                        'EGP' => 8500,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 100000,
                    'bonus' => '16%',
                    'prices' => [
                        'USDT' => 467,
                        'TL' => 12142,
                        'EGP' => 15411,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 250000,
                    'bonus' => '18%',
                    'prices' => [
                        'USDT' => 1084,
                        'TL' => 28184,
                        'EGP' => 34688,
                    ],
                    'label' => 'BEST DEAL',
                ],
                [
                    'silk' => 500000,
                    'bonus' => '20%',
                    'prices' => [
                        'USDT' => 2000,
                        'TL' => 52000,
                        'EGP' => 62000,
                    ],
                    'label' => null,
                ],
            ],
            'paymentMethods' => [
                [
                    'method' => 'Credit/Debit Card',
                    'description' => 'Credit & Debit cards',
                    'icon' => asset('icons/payment-methods/stripe.svg')
                ],
                [
                    'method' => 'PayPal',
                    'description' => 'Fast and secure online payments',
                    'icon' => asset('icons/payment-methods/paypal.svg')
                ],
                [
                    'method' => 'Mobile Wallet (Egypt)',
                    'description' => 'Pay using your mobile wallet',
                    'icon' => asset('icons/payment-methods/mobile-wallet.svg')
                ],
            ],
            'specialOffer' => [
                'active' => false,
                'bonus' => '2.5%'
            ]
        ];
    }
}
