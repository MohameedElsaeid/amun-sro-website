<?php

namespace App\Services\Payment;

class PaymentInformationProvider
{
    public function getPaymentInformation(): array
    {
        return [
            'packages' => [
                [
                    'silk' => 1000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 300,
                        'USDT' => 5.88,
                        'TL' => 225.56,
                        'BRL' => 33.33,
                    ],
                    'label' => "Nomad's Pouch",
                ],
                [
                    'silk' => 2000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 600,
                        'USDT' => 11.76,
                        'TL' => 451.13,
                        'BRL' => 66.67,
                    ],
                    'label' => "Trader's Satchel",
                ],
                [
                    'silk' => 3000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 900,
                        'USDT' => 17.65,
                        'TL' => 676.69,
                        'BRL' => 100.00,
                    ],
                    'label' => "Merchant's Parcel",
                ],
                [
                    'silk' => 4000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 1200,
                        'USDT' => 23.53,
                        'TL' => 902.26,
                        'BRL' => 133.33,
                    ],
                    'label' => "Caravan's Cargo",
                ],
                [
                    'silk' => 5000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 1500,
                        'USDT' => 29.41,
                        'TL' => 1127.82,
                        'BRL' => 166.67,
                    ],
                    'label' => "Desert Stash",
                ],
                [
                    'silk' => 6000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 1800,
                        'USDT' => 35.29,
                        'TL' => 1353.38,
                        'BRL' => 200.00,
                    ],
                    'label' => "Oasis Reserve",
                ],
                [
                    'silk' => 8000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 2400,
                        'USDT' => 47.06,
                        'TL' => 1804.51,
                        'BRL' => 266.67,
                    ],
                    'label' => "Sunrise Hoard",
                ],
                [
                    'silk' => 10000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 3000,
                        'USDT' => 58.82,
                        'TL' => 2255.64,
                        'BRL' => 333.33,
                    ],
                    'label' => "Royal Caravan",
                ],
                [
                    'silk' => 14000,
                    'bonus' => 2800, // 20% bonus
                    'prices' => [
                        'EGP' => 4200,
                        'USDT' => 82.35,
                        'TL' => 3157.89,
                        'BRL' => 466.67,
                    ],
                    'label' => "Amun's Blessing",
                ],
                [
                    'silk' => 20000,
                    'bonus' => 4000, // 20% bonus
                    'prices' => [
                        'EGP' => 6000,
                        'USDT' => 117.65,
                        'TL' => 4511.28,
                        'BRL' => 666.67,
                    ],
                    'label' => "Pharaoh's Treasury",
                ],
                [
                    'silk' => 30000,
                    'bonus' => 6000, // 20% bonus
                    'prices' => [
                        'EGP' => 9000,
                        'USDT' => 176.47,
                        'TL' => 6770.68,
                        'BRL' => 1000.00,
                    ],
                    'label' => "Sultan's Legacy",
                ],
                [
                    'silk' => 40000,
                    'bonus' => 8000, // 20% bonus
                    'prices' => [
                        'EGP' => 12000,
                        'USDT' => 235.29,
                        'TL' => 9022.56,
                        'BRL' => 1333.33,
                    ],
                    'label' => "Imperial Bazaar",
                ],
                [
                    'silk' => 100000,
                    'bonus' => 20000, // 20% bonus
                    'prices' => [
                        'EGP' => 30000,
                        'USDT' => 588.24,
                        'TL' => 22556.39,
                        'BRL' => 3333.33,
                    ],
                    'label' => "Golden Scarab",
                ],
                [
                    'silk' => 200000,
                    'bonus' => 40000, // 20% bonus
                    'prices' => [
                        'EGP' => 60000,
                        'USDT' => 1176.47,
                        'TL' => 45112.78,
                        'BRL' => 6666.67,
                    ],
                    'label' => "Pyramid's Secret",
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
