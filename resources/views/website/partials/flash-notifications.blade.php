{{-- Flash Messages for JS to display --}}
<script>
    window.flashMessages = {
        success: @json(session('success')),
        error: @json(session('error')),
        warning: @json(session('warning')),
        info: @json(session('info'))
    };
    window.userAuthenticated = @json(auth()->check());
</script>

{{-- Container for dynamically added notifications --}}
<div id="notification-container"></div>
