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
                        'EGP' => 500,
                        'USDT' => 9.81,
                        'TL' => 375.94,
                        'BRL' => 55.55,
                    ],
                    'label' => "Nomad's Pouch",
                ],
                [
                    'silk' => 2000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 1000,
                        'USDT' => 19.62,
                        'TL' => 751.88,
                        'BRL' => 111.11,
                    ],
                    'label' => "Trader's Satchel",
                ],
                [
                    'silk' => 3000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 1500,
                        'USDT' => 29.43,
                        'TL' => 1127.82,
                        'BRL' => 166.67,
                    ],
                    'label' => "Merchant's Parcel",
                ],
                [
                    'silk' => 4000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 2000,
                        'USDT' => 39.24,
                        'TL' => 1503.76,
                        'BRL' => 222.22,
                    ],
                    'label' => "Caravan's Cargo",
                ],
                [
                    'silk' => 5000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 2500,
                        'USDT' => 49.05,
                        'TL' => 1879.70,
                        'BRL' => 277.78,
                    ],
                    'label' => "Desert Stash",
                ],
                [
                    'silk' => 6000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 3000,
                        'USDT' => 58.86,
                        'TL' => 2255.64,
                        'BRL' => 333.33,
                    ],
                    'label' => "Oasis Reserve",
                ],
                [
                    'silk' => 8000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 4000,
                        'USDT' => 78.48,
                        'TL' => 3007.52,
                        'BRL' => 444.44,
                    ],
                    'label' => "Sunrise Hoard",
                ],
                [
                    'silk' => 10000,
                    'bonus' => null,
                    'prices' => [
                        'EGP' => 5000,
                        'USDT' => 98.10,
                        'TL' => 3759.39,
                        'BRL' => 555.56,
                    ],
                    'label' => "Royal Caravan",
                ],
                [
                    'silk' => 14000,
                    'bonus' => 2800,
                    'prices' => [
                        'EGP' => 7000,
                        'USDT' => 137.34,
                        'TL' => 5263.15,
                        'BRL' => 777.78,
                    ],
                    'label' => "Amun's Blessing",
                ],
                [
                    'silk' => 20000,
                    'bonus' => 4000,
                    'prices' => [
                        'EGP' => 10000,
                        'USDT' => 196.20,
                        'TL' => 7518.78,
                        'BRL' => 1111.11,
                    ],
                    'label' => "Pharaoh's Treasury",
                ],
                [
                    'silk' => 30000,
                    'bonus' => 6000,
                    'prices' => [
                        'EGP' => 15000,
                        'USDT' => 294.30,
                        'TL' => 11278.17,
                        'BRL' => 1666.67,
                    ],
                    'label' => "Sultan's Legacy",
                ],
                [
                    'silk' => 40000,
                    'bonus' => 8000,
                    'prices' => [
                        'EGP' => 20000,
                        'USDT' => 392.40,
                        'TL' => 15037.56,
                        'BRL' => 2222.22,
                    ],
                    'label' => "Imperial Bazaar",
                ],
                [
                    'silk' => 100000,
                    'bonus' => 20000,
                    'prices' => [
                        'EGP' => 50000,
                        'USDT' => 981.00,
                        'TL' => 37593.15,
                        'BRL' => 5555.56,
                    ],
                    'label' => "Golden Scarab",
                ],
                [
                    'silk' => 200000,
                    'bonus' => 40000,
                    'prices' => [
                        'EGP' => 100000,
                        'USDT' => 1962.00,
                        'TL' => 75186.30,
                        'BRL' => 11111.11,
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
