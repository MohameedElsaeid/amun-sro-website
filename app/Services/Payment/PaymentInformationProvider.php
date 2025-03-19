<?php

namespace App\Services\Payment;

class PaymentInformationProvider
{
    public function getPaymentInformation(): array
    {
        return [
            'packages' => [
                [
                    'silk' => 75,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 75,
                        'USDT' => 1.5,
                        'BRL' => 1.12,
                        'EGP' => 112.5,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 150,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 150,
                        'USDT' => 3,
                        'BRL' => 2.24,
                        'EGP' => 225,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 225,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 225,
                        'USDT' => 4.5,
                        'BRL' => 3.48,
                        'EGP' => 337.5,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 300,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 300,
                        'USDT' => 6,
                        'BRL' => 4.50,
                        'EGP' => 450,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 375,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 375,
                        'USDT' => 7.5,
                        'BRL' => 5.60,
                        'EGP' => 562.5,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 450,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 450,
                        'USDT' => 9,
                        'BRL' => 6.75,
                        'EGP' => 675,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 600,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 600,
                        'USDT' => 12,
                        'BRL' => 9,
                        'EGP' => 900,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 750,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 750,
                        'USDT' => 15,
                        'BRL' => 11.25,
                        'EGP' => 1125,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 1050,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 1050,
                        'USDT' => 21,
                        'BRL' => 15.75,
                        'EGP' => 1575,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 1500,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 1500,
                        'USDT' => 30,
                        'BRL' => 22.5,
                        'EGP' => 2250,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 2250,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 2250,
                        'USDT' => 45,
                        'BRL' => 33.75,
                        'EGP' => 3375,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 3000,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 3000,
                        'USDT' => 60,
                        'BRL' => 45,
                        'EGP' => 4500,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 7500,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 7500,
                        'USDT' => 150,
                        'BRL' => 112.5,
                        'EGP' => 11250,
                    ],
                    'label' => null,
                ],
                [
                    'silk' => 15000,
                    'bonus' => null,
                    'prices' => [
                        'TL' => 15000,
                        'USDT' => 300,
                        'BRL' => 225,

                        'EGP' => 22500,
                    ],
                    'label' => null,
                ]
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
