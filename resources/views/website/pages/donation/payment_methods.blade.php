@extends('website.layouts.app')

@section('title', 'Select Payment Method - Amun Sro')
@section('meta-description', 'Choose your preferred payment method to complete your Silk purchase on Amun Sro.')

@section('content')
    <!-- Payment Method Selection Hero -->
    <div class="page-hero relative" style="background-image: url('{{ asset('icons/feat_5.webp') }}');">
        <div class="container mx-auto px-4 text-center relative z-10 py-10">
            <h1 class="text-3xl md:text-4xl font-cinzel font-bold text-gold mb-2 hero-animate">Select Payment
                Method</h1>
            <p class="text-lg text-sand-light max-w-3xl mx-auto hero-animate hero-animate-delay-1">
                Complete your purchase of {{ number_format($package['silk']) }} Silk
            </p>
        </div>
    </div>

    <!-- Payment Method Selection -->
    <main class="py-10 bg-sand-light relative z-20">
        <div class="container mx-auto px-4 max-w-4xl">
            <!-- Order Summary Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h2 class="text-xl font-cinzel font-bold text-midnight mb-4">Order Summary</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Package Silk -->
                    <div>
                        <p class="text-midnight-light text-sm">Package</p>
                        <p class="text-midnight font-bold">{{ number_format($package['silk']) }} Silk</p>
                    </div>

                    <!-- Price -->
                    <div>
                        <p class="text-midnight-light text-sm">Price</p>
                        <p class="text-midnight font-bold">{{ number_format($price, 2) }} {{ $currency }}</p>
                    </div>

                    <!-- Fees (3%) -->
                    @php
                        $fees = round($price * 0.03, 2);
                        $totalCost = $price + $fees;
                        $totalSilk = $package['silk'] + ($package['bonus'] ?? 0);
                    @endphp
                    <div>
                        <p class="text-midnight-light text-sm">Fees (3%)</p>
                        <p class="text-gold-dark font-bold">{{ number_format($fees, 2) }} {{ $currency }}</p>
                    </div>

                    <!-- Total Cost -->
                    <div>
                        <p class="text-midnight-light text-sm font-bold">Total</p>
                        <p class="text-midnight font-bold">{{ number_format($totalCost, 2) }} {{ $currency }}</p>
                    </div>

                    <!-- You Will Receive Header (full‑width) -->
                    <div class="col-span-1 md:col-span-2 border-t pt-4 mt-4">
                        <p class="text-midnight font-bold text-base">You Will Receive</p>
                    </div>

                    <!-- Silk Received -->
                    <div>
                        <p class="text-midnight-light text-sm">Silk</p>
                        <p class="text-midnight font-bold">{{ number_format($package['silk']) }}</p>
                    </div>

                    <!-- Bonus Received -->
                    <div>
                        <p class="text-midnight-light text-sm">Bonus</p>
                        <p class="text-gold-dark font-bold">
                            @if($package['bonus'])
                                +{{ number_format($package['bonus']) }}
                            @else
                                N/A
                            @endif
                        </p>
                    </div>

                    <!-- Total Silk Received -->
                    <div>
                        <p class="text-midnight-light text-sm">Total Silk</p>
                        <p class="text-midnight font-bold">{{ number_format($totalSilk) }}</p>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-xl font-cinzel font-bold text-midnight mb-6">Choose Payment Method</h2>

                <!-- Payment Method Selection Form -->
                <form id="payment-form">
                    @csrf
                    <input type="hidden" name="package_id" value="{{ $packageId }}">
                    <input type="hidden" name="currency" value="{{ $currency }}">

                    <div class="grid grid-cols-1 gap-4">
                        @foreach($paymentMethods as $index => $method)
                            <div
                                class="payment-method-option border border-sand rounded-lg p-4 cursor-pointer hover:border-gold transition-colors"
                                data-method-id="{{ $index }}">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 mr-4">
                                        <img src="{{ $method['icon'] }}" alt="{{ $method['method'] }}"
                                             class="h-12 w-12">
                                    </div>
                                    <div class="flex-grow">
                                        <h3 class="font-bold text-midnight">{{ $method['method'] }}</h3>
                                        <p class="text-sm text-midnight-light">{{ $method['description'] }}</p>
                                    </div>
                                    <div class="flex-shrink-0 ml-4">
                                        <div
                                            class="payment-radio w-6 h-6 rounded-full border-2 border-midnight-light flex items-center justify-center">
                                            <div class="payment-radio-inner w-3 h-3 rounded-full bg-gold hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <input type="hidden" name="payment_method" id="selected-payment-method">

                    <!-- Submit Button -->
                    <div class="mt-8">
                        <button type="submit" id="submit-payment" disabled
                                class="w-full bg-gold opacity-50 cursor-not-allowed hover:bg-gold-dark text-midnight-dark font-bold py-3 px-6 rounded-lg transition-colors flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Complete Purchase
                        </button>
                    </div>

                    <p class="text-center text-sm text-midnight-light mt-4 flex items-center justify-center">
                        <svg class="h-4 w-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        Secure payment processing. Your details are encrypted and protected.
                    </p>
                </form>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-col md:flex-row justify-between items-center">
                <a href="{{ route('website.donate.currency', $currency) }}"
                   class="inline-flex items-center text-midnight hover:text-gold mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 17l-5-5m0 0l5-5m-5 5h12"/>
                    </svg>
                    Return to Packages
                </a>

                <a href="{{ route('website.donate') }}" class="inline-flex items-center text-midnight hover:text-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Change Currency
                </a>
            </div>
        </div>

    </main>

    <!-- Payment Modal -->
    <div id="payment-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="fixed inset-0 bg-midnight-dark bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <div
            class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full relative z-10">
            <div class="flex justify-between items-center border-b border-sand p-4">
                <h3 class="text-xl font-bold text-midnight" id="payment-modal-title">Complete Payment</h3>
                <button type="button" id="close-payment-modal" class="text-midnight-light hover:text-midnight">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Order Reference -->
            <div class="bg-midnight-light/5 p-4 border-b border-sand">
                <div class="flex justify-between items-center">
                    <span class="text-midnight-light">Order Reference:</span>
                    <span class="font-bold text-midnight" id="transaction-id">-</span>
                </div>
            </div>

            <!-- Payment iframe will be loaded here -->
            <div class="payment-frame">
                <iframe id="payment-iframe" src="about:blank" frameborder="0" class="w-full h-96"></iframe>
            </div>

            <div class="bg-midnight-light/5 p-4 text-center">
                <p class="text-sm text-midnight-light">If the payment page doesn't load, please click the button
                    below.</p>
                <a href="#" id="external-payment-link" target="_blank"
                   class="inline-block mt-2 bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors text-sm">
                    Open Payment Page
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const paymentForm = document.getElementById('payment-form');
            const paymentMethodOptions = document.querySelectorAll('.payment-method-option');
            const selectedPaymentMethodInput = document.getElementById('selected-payment-method');
            const submitButton = document.getElementById('submit-payment');
            const paymentModal = document.getElementById('payment-modal');
            const closePaymentModal = document.getElementById('close-payment-modal');
            const paymentIframe = document.getElementById('payment-iframe');
            const paymentModalTitle = document.getElementById('payment-modal-title');
            const transactionIdDisplay = document.getElementById('transaction-id');
            const externalPaymentLink = document.getElementById('external-payment-link');

            // Payment method selection
            paymentMethodOptions.forEach(option => {
                option.addEventListener('click', function () {
                    const methodId = this.getAttribute('data-method-id');

                    // Update UI
                    paymentMethodOptions.forEach(opt => {
                        opt.classList.remove('border-gold', 'bg-gold-light/20');
                        opt.querySelector('.payment-radio-inner').classList.add('hidden');
                    });

                    this.classList.add('border-gold', 'bg-gold-light/20');
                    this.querySelector('.payment-radio-inner').classList.remove('hidden');

                    // Update form value
                    selectedPaymentMethodInput.value = methodId;

                    // Enable submit button
                    submitButton.disabled = false;
                    submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
                });
            });

            // Form submission
            paymentForm.addEventListener('submit', function (e) {
                e.preventDefault();

                if (!selectedPaymentMethodInput.value) {
                    alert('Please select a payment method');
                    return;
                }

                // Show loading state
                const originalButtonText = submitButton.innerHTML;
                submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-midnight-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...';
                submitButton.disabled = true;

                // Create form data
                const formData = new FormData(paymentForm);

                // Submit form
                fetch('{{ route("website.donate.process") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Payment processed successfully:', data);

                            // Update payment modal
                            if (paymentIframe && paymentModal && paymentModalTitle) {
                                paymentIframe.src = data.iframe_url;
                                paymentModalTitle.textContent = data.modal_title || 'Complete Payment';

                                if (transactionIdDisplay) {
                                    transactionIdDisplay.textContent = data.transaction_id || '-';
                                }

                                if (externalPaymentLink) {
                                    externalPaymentLink.href = data.iframe_url;
                                }

                                paymentModal.classList.remove('hidden');
                            }
                        } else {
                            console.error('Error processing payment:', data);

                            if (data.redirect) {
                                window.location.href = data.redirect;
                                return;
                            }

                            alert(data.message || 'There was an error processing your payment. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error processing payment:', error);
                        alert('There was an error processing your payment. Please try again.');
                    })
                    .finally(() => {
                        // Reset button
                        submitButton.innerHTML = originalButtonText;
                        submitButton.disabled = false;
                    });
            });

            // Close payment modal
            if (closePaymentModal && paymentModal) {
                closePaymentModal.addEventListener('click', function () {
                    paymentModal.classList.add('hidden');
                    if (paymentIframe) {
                        paymentIframe.src = 'about:blank';
                    }
                });
            }
        });
    </script>
@endpush
