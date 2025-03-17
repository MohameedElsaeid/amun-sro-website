<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Services\Payment\PaymentGatewayService;
use App\Services\Payment\PaymentInformationProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use InvalidArgumentException;

class PaymentController extends Controller
{

    public function __construct(
        private readonly PaymentInformationProvider $paymentInfoProvider,
        private readonly PaymentGatewayService      $paymentGatewayService
    )
    {}

    public function index()
    {
        $paymentInformation = $this->paymentInfoProvider->getPaymentInformation();
        return view('website.pages.donation.index', compact('paymentInformation'));
    }

    public function processDonation(Request $request)
    {

        // Validate request input
//        $validated = $request->validate([
//            'package_id' => 'required|numeric',
//            'payment_method' => 'required|numeric',
//            'currency' => 'required|string',
//        ]);
//
//        // Ensure the user is authenticated
//        if (!Auth::check()) {
//            return response()->json([
//                'success' => false,
//                'message' => 'You must be logged in to make a donation',
//            ], 401);
//        }
//
//        $paymentInformation = $this->paymentInfoProvider->getPaymentInformation();
//        $packageIndex = (int)$validated['package_id'];
//        $paymentMethodIndex = (int)$validated['payment_method'];
//        $currency = $validated['currency'];
//
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
//        $package = $paymentInformation['packages'][$packageIndex];
//        $paymentMethod = $paymentInformation['paymentMethods'][$paymentMethodIndex];
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
dd($request->all());
        // Get the payment URL and modal title using the Payment Gateway Service
        try {
            [$iframeUrl, $modalTitle] = $this->paymentGatewayService->generatePaymentUrl($paymentMethod, $transactionId);
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
