
<div class="notifications-container fixed top-4 right-4 z-50 w-full max-w-sm space-y-4">
    @if(session('success'))
        <div class="notification notification-success flex rounded-md overflow-hidden animate-fade-in" role="alert">
            <div class="notification-indicator bg-green-500 w-2"></div>
            <div class="notification-content flex-1 bg-green-50 px-4 py-3 text-green-800 flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="flex-1">
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
                <button type="button" class="notification-close ml-3 text-green-700 hover:text-green-900" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="notification notification-error flex rounded-md overflow-hidden animate-fade-in" role="alert">
            <div class="notification-indicator bg-red-500 w-2"></div>
            <div class="notification-content flex-1 bg-red-50 px-4 py-3 text-red-800 flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-red-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="flex-1">
                    <p class="font-medium">{{ session('error') }}</p>
                </div>
                <button type="button" class="notification-close ml-3 text-red-700 hover:text-red-900" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    @if($errors->any())
        <div class="notification notification-errors flex rounded-md overflow-hidden animate-fade-in" role="alert">
            <div class="notification-indicator bg-orange-500 w-2"></div>
            <div class="notification-content flex-1 bg-orange-50 px-4 py-3 text-orange-800 flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-orange-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <div class="flex-1">
                    <p class="font-medium mb-2">Please check the following:</p>
                    <ul class="list-disc pl-5 space-y-1 text-sm">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="notification-close ml-3 text-orange-700 hover:text-orange-900" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all close buttons
        const closeButtons = document.querySelectorAll('.notification-close');

        // Add click event to each close button
        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const notification = this.closest('.notification');

                // Add fade out animation class
                notification.classList.add('animate-fade-out');

                // Remove the notification after animation completes
                setTimeout(() => {
                    notification.remove();
                }, 300);
            });
        });

        // Auto-dismiss notifications after 5 seconds
        const notifications = document.querySelectorAll('.notification');
        notifications.forEach(notification => {
            setTimeout(() => {
                if (notification) {
                    notification.classList.add('animate-fade-out');
                    setTimeout(() => {
                        notification.remove();
                    }, 300);
                }
            }, 5000);
        });
    });
</script>
