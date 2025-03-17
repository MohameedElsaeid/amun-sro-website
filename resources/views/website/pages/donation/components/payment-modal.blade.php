
<!-- Payment Modal -->
<div id="payment-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="fixed inset-0 bg-midnight-dark bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    
    <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full relative z-10">
        <div class="flex justify-between items-center border-b border-sand p-4">
            <h3 class="text-xl font-bold text-midnight" id="payment-modal-title">Complete Payment</h3>
            <button type="button" id="close-payment-modal" class="text-midnight-light hover:text-midnight">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
            <p class="text-sm text-midnight-light">If the payment page doesn't load, please click the button below.</p>
            <a href="#" id="external-payment-link" target="_blank" class="inline-block mt-2 bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors text-sm">
                Open Payment Page
            </a>
        </div>
    </div>
</div>
