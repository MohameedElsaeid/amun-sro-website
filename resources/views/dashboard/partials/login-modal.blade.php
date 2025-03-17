<div id="login-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg w-full max-w-md mx-4 overflow-hidden shadow-2xl">
        <div class="flex justify-between items-center border-b border-sand p-4">
            <h3 class="text-xl font-bold text-midnight">Login Required</h3>
            <button class="close-modal-btn text-midnight-light hover:text-midnight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="p-6">
            <p class="text-midnight mb-4">Please login or create an account to continue with your purchase.</p>

            <form method="POST" action="{{ route('website.login.submit') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="modal-username" class="block text-midnight-light font-medium mb-1">Username</label>
                    <input type="text" id="modal-username" name="StrUserID"
                           class="w-full bg-sand-light border border-sand focus:border-gold px-4 py-2 rounded-md"
                           required>
                </div>

                <div>
                    <label for="modal-password" class="block text-midnight-light font-medium mb-1">Password</label>
                    <input type="password" id="modal-password" name="password"
                           class="w-full bg-sand-light border border-sand focus:border-gold px-4 py-2 rounded-md"
                           required>
                </div>

                <input type="hidden" name="redirect_to" value="{{ route('website.donate') }}">

                <div class="flex items-center">
                    <input type="checkbox" id="modal-remember" name="remember"
                           class="h-4 w-4 border border-sand rounded accent-gold">
                    <label for="modal-remember" class="ml-2 text-midnight-light">Remember me</label>
                </div>

                <button type="submit"
                        class="w-full bg-gold hover:bg-gold-light text-midnight-dark font-bold py-2 px-4 rounded-md transition-colors">
                    Login
                </button>
            </form>

            <div class="mt-4 text-center">
                <p class="text-midnight-light">Don't have an account?
                    <a href="{{ route('website.register') }}" class="text-gold hover:text-gold-light">Register</a>
                </p>
            </div>
        </div>
    </div>
</div>
