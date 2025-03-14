<div id="payment-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg w-full max-w-4xl mx-4 overflow-hidden shadow-2xl">
        <div class="flex justify-between items-center border-b border-sand p-4">
            <h3 id="modal-title" class="text-xl font-bold text-midnight">Complete Payment</h3>
            <button id="close-modal-btn" class="text-midnight-light hover:text-midnight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-0">
            <iframe id="payment-iframe" class="w-full h-[600px] border-0" src="about:blank"></iframe>
        </div>
    </div>
</div>
