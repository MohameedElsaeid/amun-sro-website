<!-- Payment Method Selection -->
<div class="payment-methods grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    @foreach($paymentInformation['paymentMethods'] as $paymentMethod)
        <div
            class="payment-method bg-white border border-sand hover:bg-gold-light rounded-lg p-6 text-center cursor-pointer hover:border-gold transition-colors">
            <div class="payment-icon h-16 w-16 mx-auto mb-4 flex items-center justify-center">
                <img src="{{ $paymentMethod['icon'] }}" alt="{{$paymentMethod['method']}}">
            </div>
            <span class="payment-name font-bold text-midnight text-lg">{{$paymentMethod['method']}}</span>
            <p class="text-midnight-light text-sm mt-2">{{$paymentMethod['description']}}</p>
        </div>
    @endforeach
</div>
