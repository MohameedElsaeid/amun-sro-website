
<!-- Payment Method Selection -->
<div class="payment-section bg-midnight-light/5 p-8 rounded-lg border border-sand">
    <h3 class="text-2xl font-cinzel font-bold text-midnight mb-6 text-center">Select Payment Method</h3>
    
    @include('website.pages.donation.components.payment-methods')
    
    @include('website.pages.donation.components.payment-details')
    
    @include('website.pages.donation.components.order-summary')
    
    @include('website.pages.donation.components.form-buttons')
</div>
