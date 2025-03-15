<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index()
    {
        $paymentInformation = [
            'packages' => [
                [
                    'silk' => 750,
                    'bonus' => '2%',
                    'prices' => [
                        'USDT' => 5,
                        'TL' => 120,
                        'EGP' => 150,
                    ],
                    'label' => null, // e.g. no special label for the smallest package
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

        return view('website.pages.donation.index', compact('paymentInformation'));
    }

    /**
     * Process donation payment
     */
    public function processDonation(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'package_id' => 'required|numeric',
            'payment_method' => 'required|numeric',
            'currency' => 'required|string',
        ]);

        // Check if user is authenticated
        if (!Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'You must be logged in to make a donation',
            ], 401);
        }

        // Get package information
        $paymentInformation = $this->getPaymentInformation();
        $packageIndex = (int)$validated['package_id'];
        $paymentMethodIndex = (int)$validated['payment_method'];
        $currency = $validated['currency'];

        // Check if package exists
        if (!isset($paymentInformation['packages'][$packageIndex])) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid package selected',
            ], 400);
        }

        // Check if payment method exists
        if (!isset($paymentInformation['paymentMethods'][$paymentMethodIndex])) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid payment method selected',
            ], 400);
        }

        // Get package and payment method information
        $package = $paymentInformation['packages'][$packageIndex];
        $paymentMethod = $paymentInformation['paymentMethods'][$paymentMethodIndex];

        // Check if currency is valid
        if (!isset($package['prices'][$currency])) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid currency selected',
            ], 400);
        }

        // Get price for selected package and currency
        $price = $package['prices'][$currency];
        $silk = $package['silk'];

        // Generate a unique transaction ID
        $transactionId = Str::uuid()->toString();

        // Create a new donation record (just for tracking)
        $user = Auth::user();
        $donation = new Donation([
            'TransactionID' => $transactionId,
            'OfferID' => $packageIndex,
            'TransactionSignature' => md5($transactionId . $price . $silk . $user->JID),
            'TransactionType' => $paymentMethod['method'],
            'UserJID' => $user->JID,
            'Username' => $user->StrUserID,
            'Silk' => $silk,
            'Total' => $price,
            'Date' => Carbon::now(),
        ]);
        $donation->save();

        // In a real implementation, you would connect to a payment processor here
        // and get a real payment URL

        // Determine iframe URL based on payment method
        $iframeUrl = '';
        $modalTitle = '';

        switch ($paymentMethodIndex) {
            case 0: // Credit/Debit Card
                $iframeUrl = "https://checkout.stripe.com/pay/" . $transactionId;
                $modalTitle = "Complete Card Payment";
                break;
            case 1: // PayPal
                $iframeUrl = "https://www.paypal.com/checkoutnow?token=" . $transactionId;
                $modalTitle = "Complete PayPal Payment";
                break;
            case 2: // Mobile Wallet
                $iframeUrl = "https://wallet.example.com/pay/" . $transactionId;
                $modalTitle = "Complete Mobile Wallet Payment";
                break;
            default:
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid payment method',
                ], 400);
        }

        // Return success response with iframe URL
        return response()->json([
            'success' => true,
            'message' => 'Payment initiated successfully',
            'iframe_url' => $iframeUrl,
            'modal_title' => $modalTitle,
            'transaction_id' => $transactionId,
        ]);
    }

    /**
     * Get payment information
     */
    private function getPaymentInformation()
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
