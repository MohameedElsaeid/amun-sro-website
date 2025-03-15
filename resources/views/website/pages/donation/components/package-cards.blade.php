
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
    @foreach($paymentInformation['packages'] as $package)
        <div class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
            <div class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all relative">
                <div class="absolute top-0 right-0 w-24 h-24 overflow-hidden">
                    <div class="popular-tag bg-gold-light font-bold text-midnight-dark text-xs py-1 px-4 absolute top-6 right-[-24px] transform rotate-45 shadow-md">{{$package['label']}}</div>
                </div>
            <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center">
                <div class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">{{$package['bonus']}} BONUS</div>
                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">{{number_format($package['silk'])}} Silk</h3>
            </div>
            </div>
            <div class="package-content p-6">

                <div class="current-price text-center mb-4">
                    <span class="active-price text-2xl font-bold text-midnight">5</span>
                    <span class="currency-label text-sm text-midnight-light ml-1">TL</span>
                </div>
                <div class="price-list space-y-2 mb-6">
                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span class="font-bold text-midnight">{{number_format($package['prices']['TL'])}}</span></div>
                    <div class="price-item flex justify-between hidden"><span class="text-midnight-light">Price (EGP):</span><span class="font-bold text-midnight">{{number_format($package['prices']['EGP'])}}</span></div>
                    <div class="price-item flex justify-between hidden"><span class="text-midnight-light">Price (USDT):</span><span class="font-bold text-midnight">{{number_format($package['prices']['USDT'])}}</span></div>
                </div>
                <button type="button" class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">Select Package</button>
            </div>
        </div>
    @endforeach
</div>
