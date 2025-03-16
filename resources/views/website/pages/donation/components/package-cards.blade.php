<!-- Package Selection -->
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
    @foreach($paymentInformation['packages'] as $index => $package)
        <div
            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all"
            data-package-id="{{ $index }}">
            <div
                class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center @if($package['label']) relative overflow-hidden @endif">
                @if($package['label'])
                    <div
                        class="package-popular absolute top-0 right-0 bg-midnight text-gold text-xs font-bold px-4 py-1 transform rotate-45 translate-x-6 translate-y-3">
                        {{ $package['label'] }}
                    </div>
                @endif
                <div
                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                    +{{ $package['bonus'] }} BONUS
                </div>
                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">
                    {{ number_format($package['silk']) }} Silk
                </h3>
            </div>
            <div class="package-content p-6">
                <div class="price-list space-y-2 mb-6">
                    @foreach($package['prices'] as $currency => $price)
                        <div class="price-list space-y-2 mb-6">
                            <div class="price-item flex justify-between" data-currency="{{ $currency }}" @if($currency !== 'USDT') hidden @endif>
                                <span class="text-midnight-light">Price ({{ $currency }}):</span>
                                <span class="font-bold text-midnight">{{ number_format($price) }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button"
                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                    Select Package
                </button>
            </div>
        </div>
    @endforeach
</div>
