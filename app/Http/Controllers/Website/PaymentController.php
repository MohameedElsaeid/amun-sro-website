<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\StripeUser;
use App\Models\StripeUsers;
use App\Models\User;
use App\Services\Payment\PaymentGatewayService;
use App\Services\Payment\PaymentInformationProvider;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Stripe\Customer;
use Stripe\EphemeralKey;
use Stripe\PaymentIntent;
use Stripe\StripeClient;

class PaymentController extends Controller
{

    public function __construct(
        private readonly PaymentInformationProvider $paymentInfoProvider,
        private readonly PaymentGatewayService      $paymentGatewayService
    )
    {
    }

    public function index()
    {
        $paymentInformation = $this->paymentInfoProvider->getPaymentInformation();
        return view('website.pages.donation.index', compact('paymentInformation'));
    }

    public function processDonation(Request $request)
    {

        // Validate request input
        $validated = $request->validate([
            'package_id' => 'required|numeric',
            'payment_method' => 'required|numeric',
            'currency' => 'required|string',
        ]);

//        // Ensure the user is authenticated
//        if (!Auth::check()) {
//            return response()->json([
//                'success' => false,
//                'message' => 'You must be logged in to make a donation',
//            ], 401);
//        }
//
        $paymentInformation = $this->paymentInfoProvider->getPaymentInformation();
        $packageIndex = (int)$validated['package_id'];
        $paymentMethodIndex = (int)$validated['payment_method'];
        $currency = $validated['currency'];

//        // Validate package existence
//        if (!isset($paymentInformation['packages'][$packageIndex])) {
//            return response()->json([
//                'success' => false,
//                'message' => 'Invalid package selected',
//            ], 400);
//        }
//
//        // Validate payment method existence
//        if (!isset($paymentInformation['paymentMethods'][$paymentMethodIndex])) {
//            return response()->json([
//                'success' => false,
//                'message' => 'Invalid payment method selected',
//            ], 400);
//        }
//
        $package = $paymentInformation['packages'][$packageIndex];
        $paymentMethod = $paymentInformation['paymentMethods'][$paymentMethodIndex];
//
//        // Validate currency availability for the package
//        if (!isset($package['prices'][$currency])) {
//            return response()->json([
//                'success' => false,
//                'message' => 'Invalid currency selected',
//            ], 400);
//        }
//
//        $price = $package['prices'][$currency];
//        $silk = $package['silk'];
//        $transactionId = Str::uuid()->toString();
//
//        // Create a new donation record
        $user = User::first();
//        $user = Auth::user();
//        Donation::create([
//            'TransactionID' => $transactionId,
//            'OfferID' => $packageIndex,
//            'TransactionSignature' => md5($transactionId . $price . $silk . $user->JID),
//            'TransactionType' => $paymentMethod['method'],
//            'UserJID' => $user->JID,
//            'Username' => $user->StrUserID,
//            'Silk' => $silk,
//            'Total' => $price,
//            'Date' => Carbon::now(),
//        ]);


        try {

            \Stripe\Stripe::setApiKey(config('payment.stripe.secret_key'));
//            $stripeUser = StripeUser::where([
//                'jid_id' => $user->JID
//            ])->first();
//
//            if (is_null($stripeUser)) {
//                $customer = Customer::create([
//                    'metadata' => [
//                        'user_id' => $user->JID,
//                        'name' => $user->StrUserID,
//                    ]
//                ]);
//                StripeUser::create([
//                    'user_id' => $user->JID,
//                    'stripe_user_id' => $customer->id
//                ]);
//            }else {
//                $customer = Customer::retrieve($stripeUser->stripe_user_id);
//            }

//            $ephemeralKey = EphemeralKey::create([
//                'customer' => $customer->id,
//            ], [
//                'stripe_version' => '2020-08-27',
//            ]);

            $paymentIntent = PaymentIntent::create([
                'amount' => 200,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
//                'receipt_email' => $payment->getUser()->email,
//                'customer' => $customer->id,
                'setup_future_usage' => 'off_session',
                'use_stripe_sdk' => true,
                'payment_method_options' => [
                    'card' => [
                        'request_three_d_secure' => 'any',
                    ],
                ],
                'metadata' => [
                    'userId' => 1,
                ]
            ]);
            return response()->json([
                'success'       => true,
                'payment_method'=> 'stripe',
                'client_secret' => $paymentIntent->client_secret,
                'transaction_id'=> 1,
                'modal_title'   => 'Complete Payment',
            ]);

        } catch (\Exception $exception) {
            dd($exception);
        }
        // Get the payment URL and modal title using the Payment Gateway Service
        try {
            [$iframeUrl, $modalTitle] = $this->paymentGatewayService->generatePaymentUrl($user, $paymentMethod, $package, $currency);
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => 'Payment initiated successfully',
            'iframe_url' => $iframeUrl,
            'modal_title' => $modalTitle,
            'transaction_id' => $transactionId,
        ]);
    }
}
