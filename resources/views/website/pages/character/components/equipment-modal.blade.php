
<div id="equipment-modal" class="fixed inset-0 bg-black/70 flex items-center justify-center z-50 hidden">
    <div class="bg-midnight border border-gold/30 rounded-lg max-w-2xl w-full max-h-[80vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-cinzel font-bold text-gold">Select Equipment</h3>
                <button id="close-equipment-modal" class="text-sand-light hover:text-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div id="equipment-items-list" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Equipment items will be populated here -->
            </div>
        </div>
    </div>
</div>
