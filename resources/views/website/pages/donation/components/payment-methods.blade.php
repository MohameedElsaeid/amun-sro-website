
<!-- Payment Method Selection -->
<div class="payment-methods grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- PayPal -->
    <div class="payment-method bg-white border border-sand hover:bg-gold-light rounded-lg p-6 text-center cursor-pointer hover:border-gold transition-colors">
        <div class="payment-icon h-16 w-16 mx-auto mb-4 flex items-center justify-center">
            <svg class="w-14 h-14 text-[#003087]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M7.076 21.337H2.47a.641.641 0 0 1-.633-.74L4.944.901C5.026.382 5.474 0 5.998 0h7.46c2.57 0 4.35.543 5.287 1.62.453.52.787 1.09.986 1.718.215.682.241 1.49.08 2.493l-.008.057v.504c-.077 2.12-1.253 3.831-3.218 4.994 1.129.992 1.622 2.428 1.414 4.154-.29 2.432-1.99 4.04-4.782 4.54a12.796 12.796 0 0 1-2.828.257H9.195c-.483 0-.892-.34-.97-.812L7.076 21.337zm8.889-14.946c-.024-.1-.04-.19-.076-.274-.235-.528-.72-.864-1.448-1.016-.282-.059-.582-.087-.893-.09l-.119-.001h-5.5l-.898 5.762h4.839l.13-.002c.392-.009.767-.057 1.15-.147 1.273-.299 2.028-1.005 2.228-2.055.102-.536.051-1.185-.075-1.667v-.51z"/>
            </svg>
        </div>
        <span class="payment-name font-bold text-midnight text-lg">PayPal</span>
        <p class="text-midnight-light text-sm mt-2">Fast and secure online payments</p>
    </div>
    
    <!-- Stripe -->
    <div class="payment-method bg-white border border-sand hover:bg-gold-light rounded-lg p-6 text-center cursor-pointer hover:border-gold transition-colors">
        <div class="payment-icon h-16 w-16 mx-auto mb-4 flex items-center justify-center">
            <svg class="w-14 h-14 text-[#635BFF]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M13.97 4.757c-3.018 0-5.508 1.25-5.508 4.03 0 4.353 6.019 3.53 6.019 5.349 0 .702-.588 1.165-1.852 1.165-1.647 0-2.844-.711-2.844-.711l-.57 2.376s1.367.686 3.414.686c2.91 0 5.617-1.146 5.617-4.142 0-4.42-6.079-3.597-6.079-5.318 0-.817.736-1.1 1.736-1.1 1.333 0 2.422.482 2.422.482l.527-2.32s-1.113-.597-2.882-.597M6.581 5.14L3.664 16.731h2.991L9.573 5.14h-2.99m-2.94 1.886L.646 8.405l2.133 8.326h2.952l3.264-10.704h-2.99c-.325 1.278-1.622 6.526-1.622 6.526-.037.178-.074.35-.15.616 0 0-.39-1.9-.972-3.142M22.752 5.14l-1.735 11.591h2.873L23.342 13h3.02s1.245 0 .646-1.51c0 0-2.873-6.35-3.132-6.35h2.99l.487 2.836c1.215-2.34 3.225-2.836 3.225-2.836h-2.993c-.82 0-1.432.343-1.921 1.1L22.751 5.14"/>
            </svg>
        </div>
        <span class="payment-name font-bold text-midnight text-lg">Stripe</span>
        <p class="text-midnight-light text-sm mt-2">Credit & Debit cards</p>
    </div>
    
    <!-- Mobile Wallet (Egypt) -->
    <div class="payment-method bg-white border border-sand hover:bg-gold-light rounded-lg p-6 text-center cursor-pointer hover:border-gold transition-colors">
        <div class="payment-icon h-16 w-16 mx-auto mb-4 flex items-center justify-center">
            <svg class="w-14 h-14 text-[#00BFA5]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                <path d="M12 18h.01"></path>
            </svg>
        </div>
        <span class="payment-name font-bold text-midnight text-lg">Mobile Wallet (Egypt)</span>
        <p class="text-midnight-light text-sm mt-2">Pay using your mobile wallet</p>
    </div>
</div>
