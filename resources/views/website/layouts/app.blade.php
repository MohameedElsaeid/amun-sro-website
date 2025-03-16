<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description"
          content="@yield('meta-description', 'Amun Sro – The ultimate SilkRoad private server experience for ASRO fans')">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Amun Sro')">
    <meta property="og:description"
          content="@yield('meta-description', 'Amun Sro – Experience the thrill of ancient Egypt in our private server!')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('og-image', asset('icons/cover.webp'))">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Amun Sro')">
    <meta name="twitter:description"
          content="@yield('meta-description', 'Amun Sro – Experience the thrill of ancient Egypt in our private server!')">
    <meta name="twitter:image" content="@yield('og-image', asset('icons/cover.webp'))">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.webp') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.webp') }}">
    <link rel="shortcut icon" href="{{ asset('icons/favicon-32x32.webp') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.webp') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icons/android-chrome-192x192.webp') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('icons/android-chrome-512x512.webp') }}">
    <link rel="manifest" href="{{ asset('config/site.webmanifest.json') }}">
    <link rel="mask-icon" href="{{ asset('config/safari-pinned-tab.svg') }}" color="#a77e0c">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ asset('config/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="facebook-domain-verification" content="95adlebjrn0aztsy6zuef633ikvjpe" />
    <title>@yield('title', 'Amun Sro - ASRO Private Server')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1DDLY8K3BF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1DDLY8K3BF');
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <!-- Styles -->
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
                var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
            ;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


            ttq.load('CVA5UKJC77U13TBVQQP0');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1308306323731554');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1308306323731554&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head') {{-- For page-specific head content --}}


</head>
<body class="bg-midnight-dark text-sand-light overflow-x-hidden">
<div class="fixed top-0 left-0 w-full h-full bg-gradient-to-b from-midnight/50  pointer-events-none z-10"></div>

@include('website.partials.header')


<!-- Add the notifications component at the top level -->
@include('website.partials.flash-notifications')

@if(Route::is('website.donate'))
    @include('website.partials.login-modal')
@endif

<main>
    @yield('content')
</main>

@include('website.partials.footer')
@stack('scripts')
</body>
</html>
